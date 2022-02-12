@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        <div class="breadcrumbs"><a class="breadcrumbs__item">Главная</a><span
                class="breadcrumbs__item breadcrumbs__item_active">Вопросы и ответы</span></div>
        <div class="article">
            <div class="article__header"><h1 class="article__title">Отзывы</h1>
                <div class="article__img"><img class="article__photo" src="i/article/reviews.png"></div>
            </div>
            <div class="grid-x grid-padding-y">
                <div class="cell medium-16 large-16"><p>Давайте спросим у детей, что они думают о лагере.</p></div>
            </div>
        </div>
        <br><br>
        <x-pagination.simple-paginator :paginator="$blocks_on_review" />
        <div class="card">
            <div class="card__col">
                @foreach($blocks_on_review as $index => $item)
                    @if (in_array($index, [0,1,2]))
                    <div class="card__item">
                        <div class="card__img">
                            <img class="card__photo" src="{{ asset('storage/' . $item->picture) }}">
                            <img class="card__circle" src="{{ asset('i/reviews/circle.png') }}">
                        </div>
                        <div class="card__header">
                            <div class="card__name">{{ $item->name }}</div>
                            <div class="card__age">{{ $item->age }}</div>
                        </div>
                        <div class="card__content">{!! $item->text !!}</div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="card__col">
                @foreach($blocks_on_review as $index => $item)
                    @if (in_array($index, [3,4,5]))
                    <div class="card__item">
                        <div class="card__img">
                            <img class="card__photo" src="{{ asset('storage/' . $item->picture) }}">
                            <img class="card__circle" src="{{ asset('i/reviews/circle.png') }}">
                        </div>
                        <div class="card__header">
                            <div class="card__name">{{ $item->name }}</div>
                            <div class="card__age">{{ $item->age }}</div>
                        </div>
                        <div class="card__content">{!! $item->text !!}</div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="card__col">
                @foreach($blocks_on_review as $index => $item)
                    @if (in_array($index, [6,7,8]))
                    <div class="card__item">
                        <div class="card__img">
                            <img class="card__photo" src="{{ asset('storage/' . $item->picture) }}">
                            <img class="card__circle" src="{{ asset('i/reviews/circle.png') }}">
                        </div>
                        <div class="card__header">
                            <div class="card__name">{{ $item->name }}</div>
                            <div class="card__age">{{ $item->age }}</div>
                        </div>
                        <div class="card__content">{!! $item->text !!}</div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <x-pagination.simple-paginator :paginator="$blocks_on_review" />
        <section class="section">
            <div class="grid-container">
                <div class="section__background section__background_review"><img class="section__img section__img_1"
                                                                                 src="images/review/review-circle-1.png"><img
                        class="section__img section__img_2" src="images/review/review-circle-2.png"><img
                        class="section__img section__img_3" src="images/review/review-frame-1.png"><img
                        class="section__img section__img_4" src="images/review/review-frame-2.png">
                    <div class="grid-x">
                        <div class="cell">
                            <div class="section__content section__content_center">
                                <div class="section__head"><span
                                        class="section__violet section__violet_2">Забронируйте путевку&nbsp;</span>в лагерь
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="grid-x justify-content-center">
                            <div class="cell large-10">
                                <div class="grid-x grid-margin-x grid-padding-y">
                                    <div class="cell">
                                        <div class="custom-input"><input placeholder=" "><label>Имя и фамилия</label></div>
                                    </div>
                                    <div class="cell">
                                        <div class="custom-input"><input placeholder=" " type="tel" name="phone" id="phone"><label>Номер
                                                телефона</label></div>
                                    </div>
                                    <div class="cell">
                                        <div class="custom-input"><input placeholder=" " type="mail"><label>Электронная почта</label></div>
                                    </div>
                                    <div class="cell text-align-center"><a class="button z-index-1" href="#" type="submit">Забронировать
                                            место</a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
