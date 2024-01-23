<?php

namespace App\Helpers;

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
}
