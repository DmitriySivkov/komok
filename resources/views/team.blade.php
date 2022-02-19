@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        {{ Breadcrumbs::render('team') }}
        <div class="article">
            <div class="article__header">
                <h1 class="article__title">{{ $meta->headline }}</h1>
                <div class="article__img">
                    <img class="article__photo" src="{{ asset('i/article/team.png') }}">
                </div>
            </div>
            <div class="grid-x grid-padding-y">
                <div class="cell large-13">
                    <div class="article__subtitle">
                        {{ $blocks_on_team[1]->headline }}<br><span class="article__underline">{{ $blocks_on_team[1]->emphasized_text }}</span>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card card_slider">
            <div class="card__slider" id="counselors">
                @foreach($blocks_on_team[1]->employees as $employee)
                <div class="card__item card__item_slider">
                    <div class="card__img">
                        <img class="card__photo" width="128" src="{{ asset('storage/' . $employee->picture) }}">
                        <img class="card__circle" src="{{ asset('i/reviews/circle.png') }}">
                    </div>
                    <div class="card__header">
                        <div class="card__name card__name_slider">{{ $employee->name }}</div>
                        <div class="card__prof">{{ $employee->profession }}</div>
                    </div>
                    <div class="card__content">
                        {!! $employee->description !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card card_slider card_violet">
            <div class="card__mainheader">
                <div class="card__title">{{ $blocks_on_team[3]->headline }}<br>
                    <span class="card__underline">{{ $blocks_on_team[3]->emphasized_text }}</span>
                </div>
            </div>
            <div class="card__slider" id="workers">
                @foreach($blocks_on_team[3]->employees as $employee)
                <div class="card__item card__item_slider">
                    <div class="card__img">
                        <img class="card__photo" width="128" src="{{ asset('storage/' . $employee->picture) }}">
                        <img class="card__circle" src="{{ asset('i/reviews/circle.png') }}"></div>
                    <div class="card__header">
                        <div class="card__name card__name_slider">{{ $employee->name }}</div>
                        <div class="card__prof">{{ $employee->profession }}</div>
                    </div>
                    <div class="card__content">
                        {!! $employee->description !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card card_large">
            <div class="card__mainheader">
                <div class="card__title">
                    <span class="card__underline card__underline_violet">{{ $blocks_on_team[4]->emphasized_text }}</span>
                    {{ $blocks_on_team[4]->headline }}
                </div>
                <div class="card__content">{!! $blocks_on_team[4]->text !!}</div>
            </div>
            <div class="card__wrapper">
                @foreach($blocks_on_team[4]->employees as $employee)
                <div class="card__item card__item_large">
                    <div class="card__img">
                        <img class="card__photo" width="225" src="{{ asset('storage/' . $employee->picture) }}">
                        <img class="card__circle card__circle_large" src="{{ asset('i/reviews/circle.png') }}">
                    </div>
                    <div class="card__header">
                        <div class="card__name card__name_large">{{ $employee->name }}</div>
                        <div class="card__prof">{{ $employee->profession }}</div>
                    </div>
                    <div class="card__content">
                        {!! $employee->description !!}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card__button"><a class="button">Выбрать смену</a></div>
        </div>
    </div>
@endsection
