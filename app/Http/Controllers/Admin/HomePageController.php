<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    function index() {
        $setting = Setting::find(1);
        $sliders = HomePage::where('key', 'like','main_slider%')->orderBy('key')->get();
        foreach($sliders as $slider)
        {
            $slider->value = json_decode($slider->value);
        }
        return view('admin.pages.home',compact("sliders","setting"));
    }

    function editSlider($id) {
        $slider = HomePage::find($id);
        $setting = Setting::find(1);
        if(!$slider)
        {
            return redirect()->route('admin.pages.home')->withErrors(['errors' => 'Slider not found']);
        }
        $slider->value = json_decode($slider->value);
        return view('admin.pages.editHomeSlider',compact("slider","setting"));
    }

    function updateSlider(Request $request, $id) {
        $setting = Setting::find(1);
        $slider = HomePage::find($id);
        if(!$slider)
        {
            return redirect()->route('admin.pages.home',compact("setting"))->withErrors(['errors' => 'Slider not found']);
        }
        $validation = $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'text' => 'required',
            'img' => 'image|mimes:png,jpg,jpeg,gif,svg,webp|max:2048|nullable'
        ]);
        $slider->value = json_decode($slider->value);
        $slider->value->title1 = $request->title1;
        $slider->value->title2 = $request->title2;
        $slider->value->text = $request->text;
        if($request->img != null )
        {
            $img = Storage::disk('public')->put('home/sliders',$request->file('img'));
            $path = "/storage/$img";
            if ($slider->value->img != null) {
                $old_image = basename($slider->value->img);
                Storage::disk()->delete("public/home/sliders/$old_image");
            }
            $slider->value->img = $path;
        }
        $slider->value = json_encode($slider->value);
        $slider->save();
        return redirect()->back()->with('success', 'Slider Updated Successfuly');
    }

}
