<?php

namespace App\Http\Controllers;

use App\Models\ReviewBlock;

class ReviewController extends LayoutController
{
    public function index()
    {
        $data['blocks_on_review'] = ReviewBlock::query()->paginate(9);

        return view('review', [
            'blocks_on_review' => $data['blocks_on_review'],
            'settings'=> $this->getLayoutSettings(),
            'meta' => $this->getMeta()
        ]);
    }
}
