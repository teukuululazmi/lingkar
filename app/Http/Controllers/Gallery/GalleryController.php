<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('Controllers.Gallery.gallery', compact('gallery'));
    }

    public function galleryPost(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|mimes:mp4,jpg,png,jpeg|max:20500',
        ]);

        $file = $request->file('foto');
        $namafoto = $file->getClientOriginalName();
        // $ext = $file->getClientOriginalExtension();
        // dd($ext);
        $penyimpanan = 'galleryfoto';
        $file->move($penyimpanan, $namafoto);

        Gallery::create([
            'foto' => $namafoto,
            'kategori' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'menambahkan');
    }

    public function galleryDelete($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        //hapus file di dalam folder
        File::delete('galleryfoto/' . $gallery->foto);
        //hapus data di db
        Gallery::find($id)->delete($id);

        return redirect()->back()->with('success', 'dihapuskan');
    }
}
