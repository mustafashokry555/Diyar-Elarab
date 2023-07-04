<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Investor;
use App\Models\CustomerReveiw;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class CustomerReveiwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $setting = Setting::find(1);
        $customer_reviews=CustomerReveiw::orderBy('id')->get();
        // dd($customer_reviews);
        // , compact('setting')
        return view('admin.pages.customer_review.index', compact('setting','customer_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::find(1);

        // , compact('setting')
        return view('admin.pages.customer_review.add_customer_review', compact('setting'));
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
            'title' => 'required',
            'text' =>'required',
        ]);
        $row = CustomerReveiw::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'title'=>$request->title,
            'text'=>$request->text,
        ]);



        if($row) {
            return redirect()->route('admin.pages.customer_review')->with('success', 'Add CustomerReview Is successfully');
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
        // $setting = Setting::find(1);
        // $customer_review = CustomerReveiw::findorFail($id);
        // return view('admin.pages.customer_review.edit_customer_review', compact('customer_review','setting'));

    }

    /**
     * Update the specified resource in storage.

     */
    public function active( string $id)
    {
        $customer_review = CustomerReveiw::findorFail($id);
        $row = $customer_review->update([

            'status'=>"1"
        ]);
        if($row) {
            return redirect()->route('admin.pages.customer_review')->with('Succes', 'The Customer Review Is Actived');
        }
    }
    public function not_active( string $id)
    {
        $customer_review = CustomerReveiw::findorFail($id);
        $row = $customer_review->update([

            'status'=>"0"
        ]);
        if($row) {
            return redirect()->route('admin.pages.customer_review')->with('error', 'The Customer Review Is Not Actived');
        }
    }
    public function update(Request $request, string $id)
    {

        // $investor = Investor::findorFail($id);
        // $this->validate($request, [
        //     'name' => 'required',
        //     'mobile' => 'required',
        //     // 'job_title' => 'required',
        //     'desc' => 'required',
        // ]);

        // if($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $fileName = $id.'.'.$file->getClientOriginalExtension();
        //     // $file->move('uploads/team', $fileName);
        //     if($investor->img !== NULL) {
        //         if(file_exists('uploads/investor/'. $investor->img)) {
        //             // $file->delete('uploads/team/'. $team->img) ;
        //             File::delete('uploads/investor/'. $investor->img);
        //         }
        //     }
        // }

        // $row = $investor->update([
        //     'name' => $request->name,
        //     'mobile' => $request->mobile,
        //     // 'img' => $id.'.'.$file->getClientOriginalExtension(),
        //     'img'=>isset($fileName) ? $fileName : $investor->img,
        //     'email'=>$request->email,
        //     'desc'=>$request->desc,
        // ]);
        // if($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $file->move('uploads/investor', $fileName);
        // }
        // if($row) {
        //     return redirect()->route('admin.pages.investor')->with('update', 'Update Investor Is successfully');
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $customer_review = CustomerReveiw::findorFail($id);



        $row =  $customer_review->delete();
        if($row) {
            return redirect()->route('admin.pages.customer_review')->with('delete', 'Delete Investor Is successfully');
        }

    }
}
?>
