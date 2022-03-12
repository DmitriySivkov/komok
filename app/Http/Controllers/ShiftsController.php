<?php

namespace App\Http\Controllers;


use App\Models\ShiftPeriod;
use App\Models\ShiftProgram;

class ShiftsController extends LayoutController
{
    public function index()
    {
        $data['shifts_period'] = ShiftPeriod::all()->keyBy('id');
        $data['shifts_period']->each(function($item) {
            $item->programs = ShiftProgram::query()->whereIn('id', json_decode($item->programs, true))->get();
        });

        return view('shifts', [
            'shifts_period' => $data['shifts_period'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
