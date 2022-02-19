<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\TeamBlock;

class TeamController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_team'] = TeamBlock::all()->keyBy('id');

        $data['blocks_on_team']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);
                $item->employees = Employee::query()->whereIn('id', json_decode($item->employees, true))->get();
        });

        return view('team', [
            'blocks_on_team' => $data['blocks_on_team'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
