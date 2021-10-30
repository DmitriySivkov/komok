@extends('templates.komok_index.layout')
@section('body')
    <section class="section"></section>
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell large-9 large-order-1 small-order-2">
                <div class="section__content">
                    <div class="section__head"><span class="section__violet section__violet_1">Лагерь,</span>&nbsp;в который хочется
                        возвращаться снова и снова
                    </div>
                    <div class="section__text"><p>Комок ― это молодежный лагерь с уникальной атмосферой, в которой каждый чувствует
                            себя комфортно.</p>
                        <p>Новые друзья, миллион полезных навыков, вагон положительных эмоций и фотографий — вот что получит ваш
                            ребенок после посещения «Комка»</p></div>
                    <div><a class="button" href="#">Подробнее о сменах</a></div>
                </div>
            </div>
            <div class="cell large-13 large-offset-2 section__background large-order-2 small-order-1">
                <img class="section__slide" src="{{ asset('i/komok-main-kid_1.jpg') }}">
                <img class="section__img section__img_1" src="{{ asset('images/mainpage/back1/Group.png') }}">
                <img class="section__img section__img_2" src="{{ asset('images/mainpage/back1/Group-1.png') }}">
                <img class="section__img section__img_3" src="{{ asset('images/mainpage/back1/Group-2.png') }}">
                <img class="section__img section__img_4" src="{{ asset('images/mainpage/back1/Group-3.png') }}">
                <img class="section__img section__img_5" src="{{ asset('images/mainpage/back1/Group-4.png') }}">
                <img class="section__img section__img_6" src="{{ asset('images/mainpage/back1/Group-5.png') }}">
                <img class="section__img section__img_7" src="{{ asset('images/mainpage/back1/Group-6.png') }}">
                <img class="section__img section__img_8 section__img_circle" src="{{ asset('images/mainpage/back1/circle-orange.png') }}">
                <img class="section__img section__img_9 section__img_circle" src="{{ asset('images/mainpage/back1/circle-violette.png') }}"></div>
        </div>
        <section class="section"></section>
        <div class="grid-container">
            <div class="section__background">
                <div class="grid-x">
                    <div class="cell large-11 large-offset-6">
                        <div class="section__content section__content_center">
                            <div class="section__head">Каждая смена&thinsp;<span
                                    class="section__violet section__violet_2">неповторима</span></div>
                            <div class="section__text">Мы верим, что каждый ребенок талантлив и помогаем каждому раскрыть свой потенциал
                                благодаря сменам с уникальными тематиками.
                            </div>
                        </div>
                    </div>
                </div>
                <img class="section__img section__img_10" src="{{ asset('images/mainpage/back2/circle.png') }}">
            </div>
        </div>
    </div>
    <section class="section"></section>
    <div class="grid-container">
        <div class="section__background">
            <div class="grid-x">
                <div class="cell large-9 large-offset-2">
                    <img class="section__slide" src="{{ asset('i/komok-main-kid_2.jpg') }}">
                </div>
                <div class="cell large-9">
                    <div class="section__content">
                        <div class="section__head">
                            <div class="section__suptop">7-12 лет</div>
                            Смены&thinsp;<span class="section__violet section__violet_3">для детей</span></div>
                        <div class="section__text"><p>Развиваем навыки самопрезентации и ораторского мастерства, повышаем уровень
                                общей эрудициии самодисциплины, закрепляем ранее приобретенные знания английского языка, и все это в игровой
                                непринужденной форме.</p></div>
                        <div><a class="button" href="#">Выбрать смену</a></div>
                    </div>
                </div>
            </div>
            <img class="section__img section__img_11" src="{{ asset('images/mainpage/back3/Megafon.png') }}">
        </div>
    </div>
    <section class="section">
        <div class="grid-container">
            <div class="section__background">
                <div class="grid-x">
                    <div class="cell large-10 large-offset-2 large-order-1 small-order-2">
                        <div class="section__content">
                            <div class="section__head">
                                <div class="section__suptop">13-17 лет</div>
                                Смены&thinsp;<span class="section__violet section__violet_4">для подростков</span></div>
                            <div class="section__text"><p>Обучающие и спортивные игры, психологические тренинги, направленные на
                                    гармонизацию отношений в мини-коллективе, целеполагание, развитие лидерских навыков (приоритизация,
                                    осознанность, умение взять ответственность), индивидуальные и групповые задания для раскрытия творческого
                                    потенциала.</p></div>
                            <div><a class="button" href="#">Выбрать смену</a></div>
                        </div>
                    </div>
                    <div class="cell large-11 large-offset-1 large-order-2 small-order-1">
                        <img class="section__slide" src="{{ asset('i/komok-main-kid_3.jpg') }}">
                    </div>
                </div>
                <img class="section__img section__img_12" src="{{ asset('images/mainpage/back4/Brain.png') }}">
                <img class="section__img section__img_13" src="{{ asset('images/mainpage/back4/Art.png') }}">
                <img class="section__img section__img_14" src="{{ asset('images/mainpage/back4/Camera.png') }}">
            </div>
        </div>
        <img class="section__img section__img_15" src="{{ asset('images/mainpage/back4/circle.png') }}">
    </section>
    <div class="board">
        <div class="grid-container">
            <div class="board__wrapper">
                <img class="board__img" src="{{ asset('images/mainpage/back5/circle.png') }}">
                <div class="board__content">Путевка в наш лагерь — это выгодная инвестиция в развитие вашего ребенка! Мы учим
                    отдыхать и дружить, верить в себя и стремиться к цели.
                </div>
            </div>
        </div>
    </div>
    <section class="section section_large-padding">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell large-9 large-order-1 small-order-2">
                    <div class="section__content">
                        <div class="section__head"><span class="section__violet section__violet_5">Больше,</span>&nbsp;чем просто
                            лагерь
                        </div>
                        <div class="section__text"><p>Уникальная атмосфера, талантливые вожатые и незабываемые эмоции — только часть
                                причин, почему ваш ребенок захочет возвращаться в Комок каждое лето.Но причин так много, что нам пришлось
                                сделать отдельную страницу, чтобы рассказать вам о них.</p></div>
                        <div><a class="button" href="#">Узнать все о лагере</a></div>
                    </div>
                </div>
                <div class="cell large-13 large-offset-2 section__background large-order-2 small-order-1">
                    <img class="section__slide" src="{{ asset('i/komok-main-kid_4.jpg') }}">
                    <img class="section__img section__img_16" src="{{ asset('images/mainpage/back6/Brain.png') }}">
                    <img class="section__img section__img_17" src="{{ asset('images/mainpage/back6/Clock.png') }}">
                    <img class="section__img section__img_18" src="{{ asset('images/mainpage/back6/Mask.png') }}">
                    <img class="section__img section__img_19" src="{{ asset('images/mainpage/back6/Tv.png') }}">
                </div>
            </div>
        </div>
        <img class="section__img section__img_20" src="{{ asset('images/mainpage/back6/circle.png') }}">
        <img class="section__img section__img_21" src="{{ asset('images/mainpage/back6/circle-small.png') }}">
    </section>
@endsection
