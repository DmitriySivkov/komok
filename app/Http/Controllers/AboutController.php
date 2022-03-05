<?php

namespace App\Http\Controllers;

use App\Models\AboutBlock;
use App\Models\Program;
use App\Models\Shift;
use App\Models\Skill;

class AboutController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_about'] = AboutBlock::all()->keyBy('id');

        $data['blocks_on_about']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);
        });

        $shifts = Shift::all();
        $shifts->each(function($item) {
            $item->programs = Program::query()->whereIn('id', json_decode($item->programs, true))->get();
        });

        $skills = Skill::all();

        return view('about', [
            'blocks_on_about' => $data['blocks_on_about'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta(),
            'shifts' => $shifts,
            'skills' => $skills
        ]);
    }
}
