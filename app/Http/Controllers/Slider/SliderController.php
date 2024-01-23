<?php

namespace App\Http\Controllers\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('Controllers.Slider.slider', compact('slider'));
    }

    public function sliderPost(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:20500',
        ]);

        $file = $request->file('foto');
        $namafoto = $file->getClientOriginalName();
        $penyimpanan = 'fotoslider';
        $file->move($penyimpanan, $namafoto);

        $test = Slider::create([
            'foto' => $namafoto,
        ]);
        // dd($test);
        return redirect()->back()->with('success', 'menambahkan');
    }

    public function sliderDelete($id)
    {
        $slider = Slider::where('id', $id)->first();
        //hapus file di dalam folder
        File::delete('fotoslider/' . $slider->foto);
        //hapus data di db
        Slider::find($id)->delete($id);

        return redirect()->back()->with('success', 'dihapuskan');
    }
}
