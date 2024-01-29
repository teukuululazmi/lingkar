<?php

namespace App\Helpers;

use App\Models\Gallery;
use App\Models\GalleryIn;
use App\Models\Instagram;
use App\Models\Slider;
use App\Models\Sponsors;

class Ghost
{
    //slider
    public static function welcome()
    {
        $slider = Slider::all();
        return $slider;
    }

    //instagramfooter
    public static function instagram()
    {
        $instagram = Instagram::all();
        return $instagram;
    }

    //sponsors
    public static function sponsors()
    {
        $sponsors = Sponsors::all();
        return $sponsors;
    }

    //gallery
    public static function gallery1()
    {
        $gallery1 = Gallery::where([
            'kategori' => 'Foto',
        ])->get();
        return $gallery1;
    }

    public static function gallery2()
    {
        $gallery2 = GalleryIn::where([
            'kategori' => 'Video',
        ])->get();
        return $gallery2;
    }
}
