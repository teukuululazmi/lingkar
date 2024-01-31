<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryIn;
use App\Models\Instagram;
use Illuminate\Http\Request;

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
        $foto = Gallery::all()->count();
        $video = GalleryIn::all()->count();
        $ig = Instagram::all()->count();
        // dd($ig);
        return view('home', compact('foto', 'video', 'ig'));
    }
}
