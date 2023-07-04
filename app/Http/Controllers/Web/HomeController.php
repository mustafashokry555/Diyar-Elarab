<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $setting = Setting::find(1);
        $sliders = HomePage::where('key', 'like','main_slider%')->orderBy('key')->get();
        foreach($sliders as $slider)
        {
            $slider->value = json_decode($slider->value);
        }
        $services = HomePage::where('key', 'like','serves%')->orderBy('key')->get();
        foreach($services as $serve)
        {
            $serve->value = json_decode($serve->value);
        }
        return view('web.home',compact(["sliders", "services", "setting"]));
    }

    function projects() {
        return view('web.projects');
    }
}
