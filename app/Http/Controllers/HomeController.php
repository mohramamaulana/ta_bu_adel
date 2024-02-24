<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gambar;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gambar = gambar::all();
        // return view('index' , compact('gambar'));
        return view('home' , compact('gambar'));
       
    }
}
