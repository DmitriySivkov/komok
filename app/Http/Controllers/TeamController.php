<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\TeamBlock;
use App\Services\ResizeService;
use Illuminate\Support\Facades\Storage;

class TeamController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_team'] = TeamBlock::all()->keyBy('id');

        $data['blocks_on_team']->each(function($item) {
            if ($item->emphasized_text)
                $item->headline = str_replace($item->emphasized_text, '', $item->headline);

            $item->employees = Employee::query()->whereIn('id', json_decode($item->employees, true))->get();

            $item->employees->each(function($employee) {
                if (Storage::disk('public')->exists($employee->picture)) {
                    $employee->picture = ResizeService::resize(
                        Storage::path('public/' . $employee->picture),
                        'public',
                        187, 187
                    );
                }
            });
        });


        return view('team', [
            'blocks_on_team' => $data['blocks_on_team'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
