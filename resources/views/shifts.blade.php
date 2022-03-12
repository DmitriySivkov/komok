@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        {{ Breadcrumbs::render('shifts') }}
    </div>
    <div class="article">
        <img class="article__circle" src="{{ asset('images/place/circle.png') }}">
        <div class="grid-container">
            <div class="article__subtitle">Смены <span class="article__underline">для подростков</span> 13-17 лет</div>
        </div>
    </div>
        <br><br>
        <div class="shift">
            <div class="grid-container">
                <div class="grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y">
                    <div class="cell large-4">
                        <div class="vertical tabs" id="example-tabs" data-responsive-accordion-tabs="accordion medium-tabs"
                             data-multi-expand="true" data-allow-all-closed="true" data-deep-link="true" data-update-history="false">
                            @foreach($shifts_period as $index => $period)
                            <div class="tabs-title {{ $loop->first ? 'is-active' : '' }} elements">
                                <a href="#panel{{$period->id}}v" aria-selected="true">
                                    {{$period->title}}
                                    <div class="tabs__subtitle">{{$period->period}}</div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="cell large-19 large-offset-1">
                        <div class="tabs-content vertical" data-tabs-content="example-tabs">
                            @foreach($shifts_period as $period)
                            <div class="tabs-panel {{ $loop->first ? 'is-active' : '' }} tabs-panel_no-padding" id="panel{{$period->id}}v">
                                <div class="tabs-content vertical" data-tabs-content="second-tabs">
                                    <div class="vertical tabs" id="second-tabs" data-tabs="">
                                        @foreach($period->programs as $program)
                                        <div class="tabs-panel {{ $loop->first ? 'is-active' : '' }} tabs-panel_no-padding" id="second{{$period->id}}v{{$program->id}}">
                                            <div class="grid-x">
                                                <div class="cell large-14">
                                                    <div class="grid-x">
                                                        <div class="cell">
                                                            <div>
                                                                <h3>{{ $program->title }}</h3>
                                                                <p>{!! $program->description !!}</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            @foreach($period->programs as $program)
                                                            <div class="tabs-title {{ $loop->first ? 'is-active' : '' }} tabs-title_program">
                                                                <div>
                                                                    <a href="#second{{$period->id}}v{{$program->id}}">{{ $program->title }}</a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell large-5 large-offset-2">
                                                    <div class="todo">
                                                        <div class="todo__item"><a class="todo__link" href="#">Распорядок дня</a></div>
                                                        <div class="todo__item"><a class="todo__link" href="#">Необходимые документы</a></div>
                                                        <div class="todo__item"><a class="todo__link" href="#">Список вещей для лагеря</a></div>
                                                    </div>
                                                </div>
                                                <div class="cell">
                                                    <h3>Путевка <span class="h3__underline">включает в себя</span></h3>
                                                    <div class="raider">
                                                        <div class="raider__col">
                                                            @foreach(explode(',',$period->includes) as $index => $include)
                                                                @if($index % 2 == 0)
                                                                    <div class="raider__item">{{ $include }}</div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="raider__col">
                                                            @foreach(explode(',',$period->includes) as $index => $include)
                                                                @if($index % 2 != 0)
                                                                    <div class="raider__item">{{ $include }}</div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell large-16">
                                                    <div class="amount">
                                                        <h3 class="amount__title">Стоимость</h3>
                                                        <div class="amount__content">
                                                            <div class="amount__price">{{ $period->price }} ₽
                                                                @if ($period->old_price)
                                                                    <div class="amount__price_old">{{ $period->old_price }} ₽</div>
                                                                @endif
                                                            </div>
                                                            <div><a class="button" href="#" type="submit">Купить путевку</a></div>
                                                        </div>
                                                        <div class="amount__description">
                                                            <div class="amount__text">
                                                                {{ $period->price_text }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reveal large" id="exampleModal1" data-reveal="" data-animation-in="spin-in"
                                                     data-animation-out="spin-out">
                                                    <section class="section">
                                                        <div class="grid-container">
                                                            <div class="section__background section__background_review"><img
                                                                    class="section__img section__img_1 section__img_z-minus"
                                                                    src="images/review/review-circle-1.png"><img
                                                                    class="section__img section__img_2 section__img_z-minus"
                                                                    src="images/review/review-circle-2.png"><img
                                                                    class="section__img section__img_3 section__img_z-minus"
                                                                    src="images/review/review-frame-1.png"><img
                                                                    class="section__img section__img_4 section__img_z-minus"
                                                                    src="images/review/review-frame-2.png">
                                                                <div class="grid-x">
                                                                    <div class="cell">
                                                                        <div class="section__content section__content_center">
                                                                            <div class="section__head"><span class="section__violet section__violet_2">Забронируйте путевку&nbsp;</span>в
                                                                                лагерь
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form>
                                                                    <div class="grid-x justify-content-center">
                                                                        <div class="cell large-10">
                                                                            <div class="grid-x grid-margin-x grid-padding-y">
                                                                                <div class="cell">
                                                                                    <div class="custom-input"><input placeholder=" "><label>Имя и фамилия</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cell">
                                                                                    <div class="custom-input"><input placeholder=" " type="tel" name="phone"
                                                                                                                     id="phone"><label>Номер телефона</label></div>
                                                                                </div>
                                                                                <div class="cell">
                                                                                    <div class="custom-input"><input placeholder=" " type="mail"><label>Электронная
                                                                                            почта</label></div>
                                                                                </div>
                                                                                <div class="cell text-align-center"><a class="button z-index-1" href="#"
                                                                                                                       type="submit">Забронировать место</a></div>
                                                                                <div class="amount"><h3 class="amount__title amount__title_center">Стоимость</h3>
                                                                                    <div class="amount__content amount__content_center">
                                                                                        <div class="amount__price">49 600 ₽
                                                                                            <div class="amount__price_old">59 000 ₽</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="amount__description amount__description_center">
                                                                                        <div class="amount__text">Торопитесь! Количество мест ограничено. Указанная
                                                                                            стоимость действует до 1 апреля. Успейте получить скидку уже сегодня!
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <button class="close-button" data-close="" aria-label="Close modal" type="button"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="reveal large" id="exampleModal2" data-reveal="" data-animation-in="spin-in" data-animation-out="spin-out">
                                                    {!! $period->schedule !!}
                                                    <button class="close-button" data-close="" aria-label="Close modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="reveal large" id="exampleModal2" data-reveal="" data-animation-in="spin-in" data-animation-out="spin-out">
                                                    {!! $period->docs !!}
                                                    <button class="close-button" data-close="" aria-label="Close modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="reveal large" id="exampleModal2" data-reveal="" data-animation-in="spin-in" data-animation-out="spin-out">
                                                    {!! $period->things !!}
                                                    <button class="close-button" data-close="" aria-label="Close modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
@endsection
