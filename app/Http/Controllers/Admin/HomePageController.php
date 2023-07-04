<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    function index() {
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
        return view('admin.pages.home',compact(["sliders", "services"]));
    }

    function editSlider($id) {
        $slider = HomePage::find($id);
        if(!$slider)
        {
            return redirect()->route('admin.pages.home')->withErrors(['errors' => 'Slider not found']);
        }
        $slider->value = json_decode($slider->value);
        return view('admin.pages.editHomeSlider',compact("slider"));
    }

    function updateSlider(Request $request, $id) {
        $slider = HomePage::find($id);
        if(!$slider)
        {
            return redirect()->route('admin.pages.home')->withErrors(['errors' => 'Slider not found']);
        }
        $validation = $request->validate([
            'title1' => 'string|required',
            'title2' => 'string|required',
            'text' => 'string|required',
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

    function editServes($id) {
        $serves = HomePage::find($id);
        if(!$serves)
        {
            return redirect()->route('admin.pages.home')->withErrors(['errors' => 'Serves not found']);
        }
        $serves->value = json_decode($serves->value);
        return view('admin.pages.editHomeServes',compact("serves"));
    }

    function updateServes(Request $request, $id) {
        $serves = HomePage::find($id);
        if(!$serves)
        {
            return redirect()->route('admin.pages.home')->withErrors(['errors' => 'Serves not found']);
        }
        $validation = $request->validate([
            'title' => 'string|required',
            'text' => 'string|required',
        ]);
        $serves->value = json_decode($serves->value);
        $serves->value->title = $request->title;
        $serves->value->text = $request->text;
        $serves->value = json_encode($serves->value);
        $serves->save();
        return redirect()->back()->with('success', 'Serves Updated Successfuly');
    }

}
