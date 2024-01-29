<?php

namespace App\Http\Controllers\GalleryIn;

use App\Http\Controllers\Controller;
use App\Models\GalleryIn;
use Illuminate\Http\Request;

class GalleryInController extends Controller
{
    public function index()
    {
        $galleryin = GalleryIn::all();
        return view('Controllers.GalleryIn.galleryin', compact('galleryin'));
    }

    public function galleryinPost(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required|file|mimes:jpg,png,jpeg|max:2000',
            'video' => 'required',
        ]);

        $file = $request->file('cover');
        $namafoto = $file->getClientOriginalName();
        $penyimpanan = 'gallerycover';
        $file->move($penyimpanan, $namafoto);

        GalleryIn::create([
            'cover' => $namafoto,
            'video' => $request->video,
            'kategori' => $request->kategori,
        ]);
        return redirect()->back()->with('success', 'menambahkan');
    }
}
