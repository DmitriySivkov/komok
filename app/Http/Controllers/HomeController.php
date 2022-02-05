<?php

namespace App\Http\Controllers;

use App\Models\MainBlock;
use Illuminate\Support\Facades\Cache;

class HomeController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_main'] = Cache::remember('blocks_on_main', 300, function () {
            return MainBlock::all()->keyBy('id');
        });

        $data['blocks_on_main']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);
        });

        return view('home', [
            'blocks_on_main' => $data['blocks_on_main'],
            'settings'=> $this->getLayoutSettings()
        ]);
    }
}
