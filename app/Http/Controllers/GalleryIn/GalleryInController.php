<?php

namespace App\Http\Controllers\GalleryIn;

use App\Http\Controllers\Controller;
use App\Models\GalleryIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function galleryinDelete($id)
    {
        $galleryin = GalleryIn::where('id', $id)->first();
        //hapus file di dalam folder
        File::delete('gallerycover/' . $galleryin->cover);
        //hapus data di db
        GalleryIn::find($id)->delete($id);

        return redirect()->back()->with('success', 'dihapuskan');
    }
}
