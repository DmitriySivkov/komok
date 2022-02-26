<?php

namespace App\Http\Controllers;

use App\Models\PlaceBlock;

class PlaceController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_place'] = PlaceBlock::all()->keyBy('id');

        $data['blocks_on_place']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);
            if ($item->pictures)
                $item->pictures = json_decode($item->pictures, true);
        });

        return view('place', [
            'blocks_on_place' => $data['blocks_on_place'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
