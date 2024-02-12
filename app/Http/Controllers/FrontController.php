<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gambar;


class FrontController extends Controller
{
    public function index()
    {
        
        $gambar = gambar::all();
        return view('index' , compact('gambar'));
        // return response()->json($gambar);
    }

    public function carigambar(Request $request)
    {
        $keyword = $request->input('search');
        $gambar = gambar::where('judul', 'like', '%' . $keyword . '%')->paginate(5);
        return view('index', compact('gambar'));
    }

    
}
