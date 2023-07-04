<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $setting = Setting::find(1);
        return view('admin.home',compact("setting"));
    }
}
