<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function get() {
        $setting = Setting::find(1);
        return view('admin.pages.setting', compact('setting'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'website_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'address' => 'required',
            'logo_image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        $setting = Setting::find(1);

        $requestArray = $request->all();

        if($request->hasFile('logo_image')) {
            $file = $request->file('logo_image');
            $fileName = 'logo'.'.'.$file->getClientOriginalExtension();
            $file->move('uploads/logo', $fileName);
        }
        $row = $setting->update([
            'website_name' => $request->website_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'mobile1' => $request->mobile1,
            'address' => $request->address,
            'logo_image' => isset($fileName) ? $fileName : $setting->logo_image,
            'logo_image_tab' => isset($fileName) ? $fileName : $setting->logo_image_tab,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'google_link' => $request->google_link,
            'map_link' => $request->map_link,
        ]);

        if($row) {
            return redirect()->back()->with('success', 'Settings updated successfully');
        }
    }
}
