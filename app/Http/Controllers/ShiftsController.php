<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Models\ReviewBlock;
use App\Models\Shift;
use App\Models\ShiftPeriod;
use App\Models\ShiftProgram;
use App\Services\GalleryService;
use App\Services\ResizeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShiftsController extends LayoutController
{
    public function index(Request $request, GalleryService $gallery)
    {
        $data['shifts_period'] = ShiftPeriod::query()
            ->orderBy('id', 'asc')
            ->when($request->has('age') && $request->get('age') === 'younger', function ($query) {
                $query->whereJsonContains('shift', strval(1));
            }, function ($query) {
                $query->whereJsonContains('shift', strval(2));
            })
            ->get();

        $data['shifts_period']->each(function($item) {
            $item->programs = ShiftProgram::query()->whereIn('id', json_decode($item->programs, true))->get();
            $item->shift = Shift::query()->whereIn('id', json_decode($item->shift, true))->get();
        });

        $reviews = ReviewBlock::query()->inRandomOrder()->limit(5)->get();
        foreach ($reviews as $item)
        {
            if (Storage::disk('public')->exists($item->picture)) {
                $item->picture = ResizeService::resize(
                    Storage::path('public/' . $item->picture),
                    'public',
                    286, 286
                );
            }
        }

        $employees = Employee::all();

        $employees->each(function($employee) {
            if (Storage::disk('public')->exists($employee->picture)) {
                $employee->picture = ResizeService::resize(
                    Storage::path('public/' . $employee->picture),
                    'public',
                    128, 128
                );
            }
        });

        $elders = $employees->filter(function($item) {
            return in_array(trim($item->profession), ['Методист', 'Вожатая', 'Вожатый']);
        });

        $employees = $employees->filter(function($item) {
            return !in_array(trim($item->profession), ['Методист', 'Вожатая', 'Вожатый']);
        });

        $pictures = $gallery->getList();

        if ($request->has('age') && $request->get('age') === 'younger') {
            $pictures = $pictures->filter(function ($item) {
                return explode('/', $item)[1] === 'Смены 7-12 лет';
            });
            if ($pictures->count() > 10)
                $pictures = $pictures->random(10);
        }
        else {
            $pictures = $pictures->filter(function ($item) {
                return explode('/', $item)[1] === 'Смены 13-17 лет';
            });
            if ($pictures->count() > 10)
                $pictures = $pictures->random(10);
        }

        $pictures = $pictures->map(function($picture) {
            if (Storage::disk('public')->exists($picture)) {
                $picture = ResizeService::resize(
                    Storage::path('public/' . $picture),
                    'public',
                    470, 313
                );
            }
            return $picture;
        });

        return view('shifts', [
            'shifts_period' => $data['shifts_period'],
            'reviews' => $reviews,
            'employees' => $employees,
            'elders' => $elders,
            'pictures' => $pictures,
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
