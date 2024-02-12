<?php

namespace App\Http\Controllers;

use App\Models\gambar;
use Illuminate\Http\Request;


class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
     {
          $this->middleware('permission:gambar-list|gambar-create|gambar-edit|gambar-delete', ['only' => ['index','show']]);
          $this->middleware('permission:gambar-create', ['only' => ['create','store']]);
          $this->middleware('permission:gambar-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:gambar-delete', ['only' => ['destroy']]);
     }

     

    public function index()
    {
        $gambar = gambar::paginate(10);
        return view('admin.gambar.index' , compact('gambar'));
        // return response()->json($gambar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregambarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request ->all());
        $validated = $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'release_date' => 'required',
        ]);
        
        $nama_file = "";

        $data = [
            'judul' => $request->judul,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'release_date' => $request->release_date
           
        ];

        if ($request->hasFile('image')) {
            $nama_file = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/'), $nama_file);
            $data['image'] = $nama_file;
        } 

        $gambar = Gambar::create( $data );

        return redirect()->route('gambar.index')->with('message' , 'data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function show(gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit(gambar $gambar)
    {
        return view('admin.gambar.edit' , compact('gambar')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategambarRequest  $request
     * @param  \App\Models\gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gambar $gambar)
    {
        $validated = $request->validate([
                'judul' => 'required',
                'nama' => 'required',
                'deskripsi' => 'required',
                'release_date' => 'required',
        ]);
    
        $gambar->judul = $request->judul;
        $gambar->nama = $request->nama;
        $gambar->deskripsi = $request->deskripsi;
        $gambar->release_date = $request->release_date;
       

        if ($request->hasFile('image')) {
            // Hapus gambar lama sebelum menggantinya dengan yang baru
            if ($gambar->image) {
                $oldImagePath = public_path('images/') . $gambar->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Pindahkan dan simpan gambar baru
            $nama_file = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images/'), $nama_file);
            $gambar->image = $nama_file;

            
        }

    
        $gambar->save();
    
        return redirect()->route('gambar.index')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(gambar $gambar)
    {
        // return response()->json($gambar);


        if ($gambar->image) {
            $imagePath = public_path('images/') . $gambar->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Hapus data mobil dari database
        $gambar->delete();

        return redirect()->route('gambar.index')->with('message', 'Data berhasil dihapus');
    }
}
