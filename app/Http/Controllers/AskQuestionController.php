<?php

namespace App\Http\Controllers;

use App\Models\AskQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AskQuestionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'mail' => ['required'],
            'text' => ['required']
        ], [
            'name.required' => 'Необходимо заполнить имя',
            'mail.required' => 'Необходимо заполнить почту',
            'text.required' => 'Необходимо заполнить вопрос',
        ]);

        if ($validator->fails())
            return Redirect::to(URL::previous() . "#askQuestion")
                ->withErrors($validator)
                ->withInput();

        AskQuestion::create($validator->validated());

        return Redirect::to(URL::previous() . "#askQuestion")
            ->with('success', 'Вопрос отправлен, скоро наш менеджер с вами свяжется.');
    }
}
