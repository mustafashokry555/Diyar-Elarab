<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    function index() {
        $projects = Project::all();
        foreach($projects as $project)
        {
            $project->imgs = json_decode($project->imgs);
        }
        return view('admin.pages.projects', compact('projects'));
    }

    function add() {
        return view('admin.pages.addproject');
    }

    function store(Request $request) {
        $validation = $request->validate([
            'name' => 'string|required',
            'desc' => 'string|required',
            // 'text' => 'string|required',
            'imgs' => 'required',
            'imgs.*' => 'mimes:png,jpg,jpeg,gif,svg,webp|max:2048',
        ]);
        $imgs = [];
        foreach($request->file('imgs') as $img)
        {
            $randam = uniqid();
            $fileName = $randam.$img->getClientOriginalName();
            $img->move(public_path('uploads/projects'), $fileName);
            $fileName = "uploads/projects/$fileName";
            array_push($imgs, $fileName);
        }

        Project::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'imgs' => json_encode($imgs),
        ]);

        return redirect()->back()->with('success', 'Project Added Successfuly');
    }

    function edit($id) {
        $project = Project::find($id);
        if($project)
        {
            $project->imgs = json_decode($project->imgs);
            return view('admin.pages.editProject', compact('project'));
        }
        return redirect()->route('admin.projects')->withErrors(['errors' => 'Projrct not found']);
    }

    function update(Request $request, $id) {
        dd($request->editordata);
        $project = Project::find($id);
        if(!$project)
        {
            return redirect()->route('admin.projects')->withErrors(['errors' => 'Project not found']);
        }
        $validation = $request->validate([
            'name' => 'string|required',
            'desc' => 'string|required',
            // 'text' => 'string|required',
            'imgs.*' => 'mimes:png,jpg,jpeg,gif,svg,webp|max:2048',
        ]);
        $imgs = [];
        if (!empty($request->file('imgs'))) {
            foreach($request->file('imgs') as $img)
            {
                $randam = uniqid();
                $fileName = $randam.$img->getClientOriginalName();
                $img->move(public_path('uploads/projects'), $fileName);
                $fileName = "uploads/projects/$fileName";
                array_push($imgs, $fileName);
            }
        }       

        if (!empty($request->deleteImgs)) {
            foreach($request->deleteImgs as $img)
            {
                if (File::exists(public_path($img))) {
                    File::delete(public_path($img));
                }
            }   
        }

        if (!empty($request->oldImgs)) {
            foreach($request->oldImgs as $img)
            {
                array_push($imgs, $img);
            }   
        }  

        $project->name = $request->name;
        $project->desc = $request->desc;
        $imgs = array_unique($imgs);
        $project->imgs = json_encode($imgs);        
        $project->save();

        return redirect()->back()->with('success', 'Project Updated Successfuly');
    }

    function delete() {
        return view('admin.pages.projrcts');
    }

}
