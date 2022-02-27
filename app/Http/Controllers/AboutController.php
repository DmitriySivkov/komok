<?php

namespace App\Http\Controllers;

use App\Models\AboutBlock;

class AboutController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_about'] = AboutBlock::all()->keyBy('id');

        $data['blocks_on_about']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);
        });

        return view('about', [
            'blocks_on_about' => $data['blocks_on_about'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
