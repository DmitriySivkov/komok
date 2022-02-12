<?php

namespace App\Http\Controllers;

use App\Models\OrderTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class OrderTicketController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['required_without:mail'],
            'mail' => ['required_without:phone']
        ], [
            'name.required' => 'Необходимо заполнить имя',
            'phone.required_without' => 'Необходимо заполнить телефон или почту',
            'mail.required_without' => 'Необходимо заполнить телефон или почту',
        ]);

        if ($validator->fails())
            return Redirect::to(URL::previous() . "#orderTicket")
                ->withErrors($validator)
                ->withInput();

        OrderTicket::create($validator->validated());

        return Redirect::to(URL::previous() . "#orderTicket")
            ->with('success', 'Заявка отправлена, скоро наш менеджер с вами свяжется.');
    }
}
