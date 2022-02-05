<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LayoutController extends Controller
{
    protected $layoutSettings = [];

    public function __construct()
    {
        $this->layoutSettings = Cache::remember('layout_settings', 300, function () {
            return Setting::all()->keyBy('key');
        });
    }

    public function getLayoutSettings()
    {
        return $this->layoutSettings;
    }
}
