<?php

namespace App\Http\Controllers;

use App\Models\WebsiteCommonSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = WebsiteCommonSetting::all()->firstOrFail();
        return view('home', [
            'website_common_settings' => $data
        ]);
    }
}
