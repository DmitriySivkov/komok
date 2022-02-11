<?php

namespace App\Http\Controllers;

use App\Models\ReviewBlock;
use Illuminate\Support\Facades\Cache;

class ReviewController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_review'] = Cache::remember('blocks_on_review', 1, function () {
            return ReviewBlock::query()->paginate(9);
        });

        return view('review', [
            'blocks_on_review' => $data['blocks_on_review'],
            'settings'=> $this->getLayoutSettings()
        ]);
    }
}
