<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=Team::orderBy('id')->get();
        return view('admin.pages.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.team.add_team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'job_title' => 'required',
            'desc' => 'required',
        ]);
        $row = Team::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'img' => Null,
            'job_title'=>$request->job_title,
            'desc'=>$request->desc,
        ]);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $row->id.'.'.$file->getClientOriginalExtension();
            $file->move('uploads/team', $fileName);
            $row->img= $fileName;
            $row->save();
        }


        if($row) {
            return redirect()->route('admin.pages.team')->with('success', 'Add Member Is successfully');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::findorFail($id);
        return view('admin.pages.team.edit_team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::findorFail($id);
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'job_title' => 'required',
            'desc' => 'required',
        ]);


        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $id.'.'.$file->getClientOriginalExtension();
            // $file->move('uploads/team', $fileName);
            if($team->img !== NULL) {
                if(file_exists('uploads/team/'. $team->img)) {
                    // $file->delete('uploads/team/'. $team->img) ;
                    File::delete('uploads/team/'. $team->img);
                }
            }
        }
        $row = $team->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            // 'img' => $id.'.'.$file->getClientOriginalExtension(),
            'img' =>  isset($fileName) ? $fileName : $team->img,

            'job_title'=>$request->job_title,
            'desc'=>$request->desc,
        ]);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('uploads/team', $fileName);
        }
        if($row) {
            return redirect()->route('admin.pages.team')->with('update', 'Update Member Is successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $team = Team::findorFail($id);

        File::delete('uploads/team/'. $team->img);

        $row =  $team->delete();
        if($row) {
            return redirect()->route('admin.pages.team')->with('delete', 'Delete Member Is successfully');
        }

    }
}
?>
