<?php

namespace App\Http\Controllers;


use App\Models\Shift;
use App\Models\ShiftPeriod;
use App\Models\ShiftProgram;
use Illuminate\Http\Request;

class ShiftsController extends LayoutController
{
    public function index(Request $request)
    {
        $data['shifts_period'] = ShiftPeriod::all()->keyBy('id');
        $data['shifts_period']->each(function($item) {
            $item->programs = ShiftProgram::query()->whereIn('id', json_decode($item->programs, true))->get();
            $item->shift = Shift::query()->where('id', json_decode($item->shift, true)[0])->get();
        });

        if ($request->has('age') && $request->get('age') === 'younger')
            $data['shifts_period'] = $data['shifts_period']->filter(function($item) {
               return $item->shift[0]->id == 1;
            });

        return view('shifts', [
            'shifts_period' => $data['shifts_period'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
