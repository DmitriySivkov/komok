@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        {{ Breadcrumbs::render('about') }}
        <div class="article">
            <div class="article__subtitle">
                {{ $blocks_on_about[1]->headline }}<span class="article__underline"><br/>{{ $blocks_on_about[1]->emphasized_text }}</span>
            </div>
        </div>
        @foreach($shifts as $shift)
        <div class="time">
            <span class="time__age">{{ $shift->title }}</span>
            <div class="time__crossline"></div>
        </div>
        <div class="show">
            @foreach($shift->programs as $program)
            <div class="show__item">
                <img class="show__image" src="{{ asset('storage/' . $program->picture) }}">
                <h2 class="show__title">{{ $program->headline }}</h2>
                <div class="show__content">
                    {!! $program->text !!}
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
        <section class="section">
            <div class="grid-container">
                <div class="section__background">
                    <div class="grid-x">
                        <div class="cell large-11">
                            <div class="section__content">
                                <div class="section__head">{{ $blocks_on_about[2]->headline }}
                                    <span class="section__violet section__violet_6">{{ $blocks_on_about[2]->emphasized_text }}</span>
                                </div>
                                <div class="section__text">{!! $blocks_on_about[2]->description !!}</div>
                            </div>
                        </div>
                        <div class="cell large-9 large-offset-2">
                            <img class="section__slide" src="{{ asset('i/camera.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="skill">
            @foreach($skills as $skill)
            <div class="skill__item">
                <div class="skill__image">
                    <img src="{{ asset('storage/' . $skill->picture) }}">
                </div>
                <div class="skill__title">{{ $skill->headline }}</div>
                <div class="skill__content">
                    {!! $skill->text !!}
                </div>
            </div>
            @endforeach
        </div>
        <div class="board">
            <div class="grid-container">
                <div class="board__wrapper board__wrapper_second">
                    <div class="board__content board__content_center">{!! $blocks_on_about[3]->text !!}</div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="grid-container">
                <div class="section__background section__background_review">
                    <img class="section__img section__img_1" src="images/review/review-circle-1.png">
                    <img class="section__img section__img_2" src="images/review/review-circle-2.png">
                    <img class="section__img section__img_3" src="images/review/review-frame-1.png">
                    <img class="section__img section__img_4" src="images/review/review-frame-2.png">
                    <div class="grid-x" id="orderTicket">
                        <div class="cell">
                            <div class="section__content section__content_center">
                                <div class="section__head">
                                    <span class="section__violet section__violet_2">Забронируйте путевку&nbsp;</span>в лагерь
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="grid-x justify-content-center">
                            <div class="cell large-10">
                                <div class="grid-x grid-margin-x grid-padding-y">
                                    <div class="cell">
                                        <div class="callout callout_alert">
                                            <ul>
                                                @foreach(array_unique($errors->all()) as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="grid-x justify-content-center">
                            <div class="cell large-10">
                                <div class="grid-x grid-margin-x grid-padding-y">
                                    <div class="cell">
                                        <div class="callout callout_success">
                                            {{ session()->get('success') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <form method="post" action="/orderTicket">
                        @csrf
                        <div class="grid-x justify-content-center">
                            <div class="cell large-10">
                                <div class="grid-x grid-margin-x grid-padding-y">
                                    <div class="cell">
                                        <div class="custom-input">
                                            <input name="name" placeholder=" " value="{{ old('name') }}">
                                            <label>Имя и фамилия</label>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <div class="custom-input">
                                            <input placeholder=" " type="tel" name="phone" id="phone" value="{{ old('phone') }}">
                                            <label>Номер телефона</label>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <div class="custom-input">
                                            <input name="mail" placeholder=" " type="mail" value="{{ old('mail') }}">
                                            <label>Электронная почта</label>
                                        </div>
                                    </div>
                                    <div class="cell text-align-center">
                                        <button class="button z-index-1" type="submit">Забронировать место</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
