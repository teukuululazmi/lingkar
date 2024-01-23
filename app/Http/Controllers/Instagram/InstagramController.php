<?php

namespace App\Http\Controllers\Instagram;

use App\Http\Controllers\Controller;
use App\Models\Instagram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InstagramController extends Controller
{
    public function index()
    {
        $instagram = Instagram::all();
        return view('Controllers.Instagram.instagram', compact('instagram'));
    }

    public function instagramPost(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2500',
        ]);

        $file = $request->file('foto');
        $namafoto = $file->getClientOriginalName();
        $penyimpanan = 'fotoinstagram';
        $file->move($penyimpanan, $namafoto);

        Instagram::create([
            'foto' => $namafoto,
        ]);

        return redirect()->back()->with('success', 'menambahkan');
    }

    public function instagramDelete($id)
    {
        $instagram = Instagram::where('id', $id)->first();
        //hapus file di dalam folder
        File::delete('fotoinstagram/' . $instagram->foto);
        //hapus data di db
        Instagram::find($id)->delete($id);

        return redirect()->back()->with('success', 'dihapuskan');
    }
}
