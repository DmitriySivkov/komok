@extends('templates.komok_index.layout')
@section('body')
    <section class="section"></section>
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell large-9 large-order-1 small-order-2">
                <div class="section__content">
                    <div class="section__head">
                        <span class="section__violet section__violet_1">{{ $blocks_on_main[1]->emphasized_text }}</span>
                        {{ $blocks_on_main[1]->headline }}
                    </div>
                    <div class="section__text">
                        {!! $blocks_on_main[1]->description !!}
                    </div>
                    <div><a class="button" href="{{ $blocks_on_main[1]->button_link }}">{{ $blocks_on_main[1]->button_title }}</a></div>
                </div>
            </div>
            <div class="cell large-13 large-offset-2 section__background large-order-2 small-order-1">
                <img class="section__slide" src="{{ asset('storage/' . $blocks_on_main[1]->picture) }}">
                <img class="section__img section__img_1" src="{{ asset('images/mainpage/back1/Group.svg') }}">
                <img class="section__img section__img_2" src="{{ asset('images/mainpage/back1/Group-1.svg') }}">
                <img class="section__img section__img_3" src="{{ asset('images/mainpage/back1/Group-2.svg') }}">
                <img class="section__img section__img_4" src="{{ asset('images/mainpage/back1/Group-3.svg') }}">
                <img class="section__img section__img_5" src="{{ asset('images/mainpage/back1/Group-4.svg') }}">
                <img class="section__img section__img_6" src="{{ asset('images/mainpage/back1/Group-5.svg') }}">
                <img class="section__img section__img_7" src="{{ asset('images/mainpage/back1/Group-6.svg') }}">
                <img class="section__img section__img_8 section__img_circle" src="{{ asset('images/mainpage/back1/circle-orange.svg') }}">
                <img class="section__img section__img_9 section__img_circle" src="{{ asset('images/mainpage/back1/circle-violette.svg') }}"></div>
        </div>
        <section class="section"></section>
        <div class="grid-container">
            <div class="section__background">
                <div class="grid-x">
                    <div class="cell large-11 large-offset-6">
                        <div class="section__content section__content_center">
                            <div class="section__head">
                                {{ $blocks_on_main[2]->headline }}<span class="section__violet section__violet_2">{{ $blocks_on_main[2]->emphasized_text }}</span>
                            </div>
                            <div class="section__text">
                                {!! $blocks_on_main[2]->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <img class="section__img section__img_10" src="{{ asset('images/mainpage/back2/circle.svg') }}">
            </div>
        </div>
    </div>
    <section class="section"></section>
    <div class="grid-container">
        <div class="section__background">
            <div class="grid-x">
                <div class="cell large-9 large-offset-1 xlarge-offset-0">
                    <img class="section__slide" src="{{ asset('storage/' . $blocks_on_main[3]->picture) }}">
                </div>
                <div class="cell large-9">
                    <div class="section__content">
                        <div class="section__head">
                            <div class="section__suptop">{{ $blocks_on_main[3]->text_above_headline }}</div>
                            {{ $blocks_on_main[3]->headline }}<span class="section__violet section__violet_3">{{ $blocks_on_main[3]->emphasized_text }}</span>
                        </div>
                        <div class="section__text">
                            {!! $blocks_on_main[3]->description !!}
                        </div>
                        <div><a class="button" href="{{ $blocks_on_main[3]->button_link }}">{{ $blocks_on_main[3]->button_title }}</a></div>
                    </div>
                </div>
            </div>
            <img class="section__img section__img_11" src="{{ asset('images/mainpage/back3/Megafon.svg') }}">
        </div>
    </div>
    <section class="section">
        <div class="grid-container">
            <div class="section__background">
                <div class="grid-x">
                    <div class="cell large-10 large-offset-2 large-order-1 small-order-2">
                        <div class="section__content">
                            <div class="section__head">
                                <div class="section__suptop">{{ $blocks_on_main[4]->text_above_headline }}</div>
                                {{ $blocks_on_main[4]->headline }}<span class="section__violet section__violet_4">{{ $blocks_on_main[4]->emphasized_text }}</span></div>
                            <div class="section__text">
                                {!! $blocks_on_main[4]->description !!}
                            </div>
                            <div><a class="button" href="{{ $blocks_on_main[4]->button_link }}">{{ $blocks_on_main[4]->button_title }}</a></div>
                        </div>
                    </div>
                    <div class="cell large-11 large-offset-1 large-order-2 small-order-1">
                        <img class="section__slide" src="{{ asset('storage/' . $blocks_on_main[4]->picture) }}">
                    </div>
                </div>
                <img class="section__img section__img_12" src="{{ asset('images/mainpage/back4/Brain.svg') }}">
                <img class="section__img section__img_13" src="{{ asset('images/mainpage/back4/Art.svg') }}">
                <img class="section__img section__img_14" src="{{ asset('images/mainpage/back4/Camera.svg') }}">
            </div>
        </div>
        <img class="section__img section__img_15" src="{{ asset('images/mainpage/back4/circle.svg') }}">
    </section>
    <div class="board">
        <div class="grid-container">
            <div class="board__wrapper">
                <img class="board__img" src="{{ asset('images/mainpage/back5/circle.svg') }}">
                <div class="board__content">
                    {!! $blocks_on_main[5]->description !!}
                </div>
            </div>
        </div>
    </div>
    <section class="section section_large-padding">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell large-9 large-order-1 small-order-2">
                    <div class="section__content">
                        <div class="section__head">
                            <span class="section__violet section__violet_5">{{ $blocks_on_main[6]->emphasized_text }}</span>
                            {{ $blocks_on_main[6]->headline }}
                        </div>
                        <div class="section__text">
                            {!! $blocks_on_main[6]->description !!}
                        </div>
                        <div><a class="button" href="{{ $blocks_on_main[6]->button_link }}">{{ $blocks_on_main[6]->button_title }}</a></div>
                    </div>
                </div>
                <div class="cell large-13 large-offset-2 section__background large-order-2 small-order-1">
                    <img class="section__slide" src="{{ asset('storage/' . $blocks_on_main[6]->picture) }}">
                    <img class="section__img section__img_16" src="{{ asset('images/mainpage/back6/Brain.svg') }}">
                    <img class="section__img section__img_17" src="{{ asset('images/mainpage/back6/Clock.svg') }}">
                    <img class="section__img section__img_18" src="{{ asset('images/mainpage/back6/Mask.svg') }}">
                    <img class="section__img section__img_19" src="{{ asset('images/mainpage/back6/Tv.svg') }}">
                </div>
            </div>
        </div>
        <img class="section__img section__img_20" src="{{ asset('images/mainpage/back6/circle.svg') }}">
        <img class="section__img section__img_21" src="{{ asset('images/mainpage/back6/circle-small.svg') }}">
    </section>
@endsection
