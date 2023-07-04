<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CatController extends Controller
{

    function index() {
        $cats = Cat::all();
        return view('admin.pages.cats', compact('cats'));
    }

    function add() {
        return view('admin.pages.addCat');
    }

    function store(Request $request) {
        $validation = $request->validate([
            'name' => 'string|required',
            'img' => 'required|mimes:png,jpg,jpeg,gif,svg,webp|max:2048',
        ]);
        
        $img = $request->file('img');
        $randam = uniqid();
        $fileName = $randam.$img->getClientOriginalName();
        $img->move(public_path('uploads/cats'), $fileName);
        $fileName = "uploads/cats/$fileName";

        Cat::create([
            'name' => $request->name,
            'img' => $fileName,
        ]);

        return redirect()->back()->with('success', 'Category Added Successfuly');
    }

    function edit($id) {
        $cat = Cat::find($id);
        if($cat)
        {
            return view('admin.pages.editCat', compact('cat'));
        }
        return redirect()->route('admin.cats')->withErrors(['errors' => 'Category not found']);
    }

    function update(Request $request, $id) {
        $cat = Cat::find($id);
        if(!$cat)
        {
            return redirect()->route('admin.cats')->withErrors(['errors' => 'Category not found']);
        }
        $validation = $request->validate([
            'name' => 'string|required',
            'img' => 'mimes:png,jpg,jpeg,gif,svg,webp|max:2048',
        ]);

        if (!empty($request->file('img'))) {
            if (File::exists(public_path($cat->img))) {
                File::delete(public_path($cat->img));
            }
            $img = $request->file('img');
            $randam = uniqid();
            $fileName = $randam.$img->getClientOriginalName();
            $img->move(public_path('uploads/cats'), $fileName);
            $fileName = "uploads/cats/$fileName";
            $cat->img = $fileName;        
        }

        $cat->name = $request->name;
        $cat->save();

        return redirect()->back()->with('success', 'Category Updated Successfuly');
    }

}
