<?php

namespace App\Http\Controllers;

use App\Models\MainBlock;
use App\Models\WebsiteCommonSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['website_common_settings'] = WebsiteCommonSetting::all()->firstOrFail();
        $data['blocks_on_main'] = MainBlock::all()->keyBy('id');
        $data['blocks_on_main']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);
        });
        return view('home', [
            'website_common_settings' => $data['website_common_settings'],
            'blocks_on_main' => $data['blocks_on_main']
        ]);
    }
}
