<?php

namespace App\Http\Controllers\Sponsors;

use App\Http\Controllers\Controller;
use App\Models\Sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SponsorsController extends Controller
{
    public function index()
    {
        $sponsors = Sponsors::all();
        return view('Controllers.Sponsors.sponsors', compact('sponsors'));
    }

    public function sponsorsPost(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2500',
        ]);

        $file = $request->file('foto');
        $namafoto = $file->getClientOriginalName();
        $penyimpanan = 'sponsorsfoto';
        $file->move($penyimpanan, $namafoto);

        Sponsors::create([
            'foto' => $namafoto,
        ]);

        return redirect()->back()->with('success', 'menambahkan');
    }

    public function sponsorsDelete($id)
    {
        $sponsors = Sponsors::where('id', $id)->first();
        //hapus file di dalam folder
        File::delete('sponsorsfoto/' . $sponsors->foto);
        //hapus data di db
        Sponsors::find($id)->delete($id);

        return redirect()->back()->with('success', 'dihapuskan');
    }
}
