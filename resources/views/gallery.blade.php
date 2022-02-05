@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        <div class="breadcrumbs"><a class="breadcrumbs__item">Главная</a><span
                class="breadcrumbs__item breadcrumbs__item_active">Галерея</span></div>
        <div class="article"><h1 class="article__title">Галерея</h1>
            <div class="article__img"><img class="article__photo" src="i/article/gallery.png"></div>
            <div class="grid-x grid-padding-y">
                <div class="cell medium-12"><p>Наш любимый фотоальбом. Здесь вы можете познакомиться с жизнью нашего лагеря, или
                        вспомнить о веселых и интересных деньках. Честно говоря, мы и сами частенько пересматриваем эти фотографии.</p>
                    <p>Укажите в каком году вы были в лагере и в какой смене. У нас все сохранено.</p></div>
            </div>
            @if ($errors->any())
                <div class="grid-x grid-padding-x">
                    <ul class="callout callout_alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/gallery">
                <div class="grid-x grid-padding-x grid-margin-y grid-padding-y medium-up-3 xlarge-up-6 large-up-5">
                    <div class="cell">
                        <div class="custom-select">
                            <select name="year">
                                <option value="0">Год</option>
                                @foreach($years as $year)
                                    <option
                                        {{ old('year') == $year ? "selected" : "" }}
                                        {{ request()->query('year') == $year ? "selected" : "" }}
                                        value="{{ $year }}"
                                    >
                                        {{ $year }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="custom-select">
                            <select name="season">
                                <option value="0">Время года</option>
                                <option
                                    {{ old('season') == "Зима" ? "selected" : "" }}
                                    {{ request()->query('season') == "Зима" ? "selected" : "" }}
                                    value="Зима"
                                >
                                    Зима
                                </option>
                                <option
                                    {{ old('season') == "Лето" ? "selected" : "" }}
                                    {{ request()->query('season') == "Лето" ? "selected" : "" }}
                                    value="Лето"
                                >
                                    Лето
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="custom-select">
                            <select name="shift">
                                <option value="0">Смена</option>
                                <option
                                    {{ old('shift') == "1" ? "selected" : "" }}
                                    {{ request()->query('shift') == "1" ? "selected" : "" }}
                                    value="1"
                                >
                                    1
                                </option>
                                <option
                                    {{ old('shift') == "2" ? "selected" : "" }}
                                    {{ request()->query('shift') == "2" ? "selected" : "" }}
                                    value="2"
                                >
                                    2
                                </option>
                                <option
                                    {{ old('shift') == "3" ? "selected" : "" }}
                                    {{ request()->query('shift') == "3" ? "selected" : "" }}
                                    value="3"
                                >
                                    3
                                </option>
                                <option
                                    {{ old('shift') == "4" ? "selected" : "" }}
                                    {{ request()->query('shift') == "4" ? "selected" : "" }}
                                    value="4"
                                >
                                    4
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="custom-radio">
                            <input
                                id="small"
                                type="radio"
                                {{ old('age') == "Смены 7-12 лет" ? "checked" : "" }}
                                {{ request()->query('age') == "Смены 7-12 лет" ? "checked" : "" }}
                                name="age"
                                value="Смены 7-12 лет"
                                checked
                            />
                            <div class="custom-radio__wrapper">
                                <label for="small">Смены 7-12 лет</label>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="custom-radio">
                            <input
                                id="large"
                                type="radio"
                                {{ old('age') == "Смены 13-17 лет" ? "checked" : "" }}
                                {{ request()->query('age') == "Смены 13-17 лет" ? "checked" : "" }}
                                name="age"
                                value="Смены 13-17 лет"
                            />
                            <div class="custom-radio__wrapper">
                                <label for="large">Смены 13-17 лет</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <button class="button" type="submit">Найти</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="gallery">
            @if($pictures->total() > 0)
            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell large-12">
                @foreach($pictures->slice(
                            request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0,
                            $pictures->perPage()
                        ) as $index => $picPath)
                        @if(in_array($index, [
                            0 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0),
                        ]))
                        <div class="grid-x">
                            <div class="cell">
                                <a class="gallery__link" href="{{ asset('storage' . $picPath) }}" data-fancybox="gallery">
                                    <img class="gallery__photo" src="{{ asset('storage' . $picPath) }}">
                                </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <div class="grid-x grid-padding-y grid-margin-y grid-padding-x">
                    @foreach($pictures->slice(
                            request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0,
                            $pictures->perPage()
                        ) as $index => $picPath)
                            @if(in_array($index, [
                                    1 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0),
                                    2 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0)
                                ]))
                                <div class="cell medium-12">
                                    <a class="gallery__link" href="{{ asset('storage' . $picPath) }}" data-fancybox="gallery">
                                        <img class="gallery__photo" src="{{ asset('storage' . $picPath) }}">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="cell large-12">
                    <div class="grid-x">
                        <div class="grid-x grid-padding-y grid-margin-y grid-padding-x">
                        @foreach($pictures->slice(
                            request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0,
                            $pictures->perPage()
                        ) as $index => $picPath)
                                @if(in_array($index, [
                                        3 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0),
                                        4 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0)
                                    ]))
                                    <div class="cell medium-12">
                                        <a class="gallery__link" href="{{ asset('storage' . $picPath) }}" data-fancybox="gallery">
                                            <img class="gallery__photo" src="{{ asset('storage' . $picPath) }}">
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        @foreach($pictures->slice(
                            request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0,
                            $pictures->perPage()
                        ) as $index => $picPath)
                            @if(in_array($index, [
                                    5 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0)
                                ]))
                            <div class="cell">
                                <a class="gallery__link" href="{{ asset('storage' . $picPath) }}" data-fancybox="gallery">
                                    <img class="gallery__photo" src="{{ asset('storage' . $picPath) }}" zxc>
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @foreach($pictures->slice(
                            request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0,
                            $pictures->perPage()
                        ) as $index => $picPath)
                        @if(in_array($index, [
                            6 + (request()->query('page') >= 2 ? $pictures->perPage() * (request()->query('page')-1) : 0)
                        ]))
                        <div class="cell">
                            <a class="gallery__link" href="{{ asset('storage' . $picPath) }}" data-fancybox="gallery">
                                <img class="gallery__photo" src="{{ asset('storage' . $picPath) }}">
                            </a>
                        </div>
                        @endif
                    @endforeach
                </div>
                @else
                <div class="callout callout__info">
                    К сожалению, фотографии не найдены
                </div>
                @endif
            </div>
        <br>
        @if ($pictures && $pictures->lastPage() != 1)
            <ul class="pagination">
                @if (!request()->has('page') || request()->query('page') <= 1)
                    <li class="pagination-previous disabled">Назад</li>
                @else
                <li class="pagination-previous">
                    <a
                        href="{{ request()->fullUrlWithQuery(['page' => (request()->query('page')-1)]) }}"
                        title=""
                        aria-label="Предыдущая страница"
                    >
                        Назад
                    </a>
                </li>
                @endif

                @foreach(range(1, $pictures->lastPage()) as $page)
                    @if (request()->query('page') == $page)
                        <li class="current">
                            <span class="show-for-sr">Вы на странице</span> {{ $page }}
                        </li>
                    @else
                        @if (request()->has('page'))
                            <li class="pagination">
                                <a href="{{ request()->fullUrlWithQuery(['page' => $page]) }}" title="" aria-label="Страница {{ $page }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @else
                            @if ($page <= 1)
                                <li class="current">
                                    <span class="show-for-sr">Вы на странице</span> {{ $page }}
                                </li>
                            @else
                                <li class="pagination">
                                    <a href="{{ request()->fullUrlWithQuery(['page' => $page]) }}" title="" aria-label="Страница {{ $page }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endif
                @endforeach
                @if ($pictures->lastPage() == 1 || request()->query('page') == $pictures->lastPage())
                    <li class="pagination-next disabled">Дальше</li>
                @else
                    <li class="pagination-next">
                        @php
                            $incr = request()->has('page') ? 1 : 2
                        @endphp
                        <a
                            href="{{ request()->fullUrlWithQuery(['page' => (request()->query('page')+$incr)]) }}"
                            title=""
                            aria-label="Следующая страница"
                        >
                            Дальше
                        </a>
                    </li>
                @endif
            </ul>
        @endif
    </div>
@endsection
