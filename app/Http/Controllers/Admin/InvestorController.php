<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investors=Investor::orderBy('id')->get();
        return view('admin.pages.investor.index', compact('investors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.investor.add_investor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            // 'email' => 'required',
            'desc' => 'required',
        ]);
        $row = Investor::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'img' => Null,
            'email'=>$request->email,
            'desc'=>$request->desc,
        ]);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $row->id.'.'.$file->getClientOriginalExtension();
            $file->move('uploads/investor', $fileName);
            $row->img= $fileName;
            $row->save();
        }


        if($row) {
            return redirect()->route('admin.pages.investor')->with('success', 'Add Investor Is successfully');
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
        $investor = Investor::findorFail($id);
        return view('admin.pages.investor.edit_investor', compact('investor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $investor = Investor::findorFail($id);
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            // 'job_title' => 'required',
            'desc' => 'required',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $id.'.'.$file->getClientOriginalExtension();
            // $file->move('uploads/team', $fileName);
            if($investor->img !== NULL) {
                if(file_exists('uploads/investor/'. $investor->img)) {
                    // $file->delete('uploads/team/'. $team->img) ;
                    File::delete('uploads/investor/'. $investor->img);
                }
            }
        }

        $row = $investor->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            // 'img' => $id.'.'.$file->getClientOriginalExtension(),
            'img'=>isset($fileName) ? $fileName : $investor->img,
            'email'=>$request->email,
            'desc'=>$request->desc,
        ]);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('uploads/investor', $fileName);
        }
        if($row) {
            return redirect()->route('admin.pages.investor')->with('update', 'Update Investor Is successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $investor = Investor::findorFail($id);

        File::delete('uploads/investor/'. $investor->img);

        $row =  $investor->delete();
        if($row) {
            return redirect()->route('admin.pages.investor')->with('delete', 'Delete Investor Is successfully');
        }

    }
}
?>
