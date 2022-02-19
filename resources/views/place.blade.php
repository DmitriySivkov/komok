@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        {{ Breadcrumbs::render('about') }}
    </div>
    <div class="article"><img class="article__circle" src="images/place/circle-1.png">
        <div class="grid-container">
            <div class="article__header"><h1 class="article__title">Местонахождение</h1>
                <div class="article__img"><img class="article__photo" src="i/article/home.png"></div>
            </div>
            <div class="article__subtitle"><span class="article__underline">Дом отдыха</span> «Подмосковье»</div>
            <div class="grid-x grid-padding-y">
                <div class="cell large-8"><p>Именно тут мы проводим наш лагерь и приглашаем ваших детей окунуться в атмосферу
                        активного полезного отдыха, творчества и креативности. Скучать будет некогда!</p></div>
            </div>
        </div>
    </div>
    <div class="place"><img class="place__circle" src="images/place/circle-2.png">
        <div class="grid-container">
            <div class="place__wrapper" id="place"><a class="place__item" href="i/place/place.png" data-fancybox="gallery"
                                                      data-caption="Фото #1"><img src="i/place/place.png"></a><a
                    class="place__item" href="i/place/place.png" data-fancybox="gallery" data-caption="Фото #2"><img
                        src="i/place/place.png"></a><a class="place__item" href="i/place/place.png" data-fancybox="gallery"
                                                       data-caption="Фото #3"><img src="i/place/place.png"></a><a class="place__item"
                                                                                                                  href="i/place/place.png"
                                                                                                                  data-fancybox="gallery"
                                                                                                                  data-caption="Фото #4"><img
                        src="i/place/place.png"></a></div>
        </div>
    </div>
    <div class="grid-container">
        <div class="skill skill_center">
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Board.png"></div>
                <div class="skill__title">Интерактивные классы творческих и бизнес занятий</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Shield.png"></div>
                <div class="skill__title">Круглосуточная охрана</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Cinema.png"></div>
                <div class="skill__title">Просторный концертный зал</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Money.png"></div>
                <div class="skill__title">Государственная компенсация</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Forest.png"></div>
                <div class="skill__title">Лесной массив, экологически чистая территория</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Medication.png"></div>
                <div class="skill__title">Квалифицированный медперсонал</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Ball.png"></div>
                <div class="skill__title">Футбольные и волейбольные площадки</div>
            </div>
            <div class="skill__item skill__item_large">
                <div class="skill__image"><img src="./images/place/Building.png"></div>
                <div class="skill__title">Обширная инфраструктура</div>
            </div>
        </div>
    </div>
    <div class="article"><img class="article__circle" src="images/place/circle-1.png">
        <div class="grid-container">
            <div class="article__subtitle">Лагерь <span class="article__underline">на карте</span></div>
            <div class="grid-x grid-padding-y">
                <div class="cell large-8"><p>Мытищинский район, с. Троицкое<br>В 12 км от Москвы</p></div>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="map"><img class="map__circle" src="images/place/circle-4.png">
            <iframe class="map__frame"
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A32ccd814582e6108bdb38de47b241f33b21c13b8138663940bc1bbfac6058679&amp;source=constructor"
                    width="938" height="571" frameborder="0"></iframe>
        </div>
    </div>
    <div class="bus"><img class="bus__image" src="images/place/bus.png">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell large-13">
                    <div class="article article_no-padding">
                        <div class="article__subtitle article__subtitle_no-margin">Примите участие<br><span
                                class="article__underline">в ознакомительной поездке</span></div>
                        <div class="grid-x grid-padding-y">
                            <div class="cell large-13"><p>Сомневаетесь, соответствуют ли условия проживания вашим ожиданиям? Мы
                                    предоставляем вам возможность своими глазами увидеть номера, оснащение и территорию лагеря. Выезды
                                    организуются по предварительной записи. Просто заполните заявку и мы подберем для вас подходящую дату. Все
                                    увидите сами!</p></div>
                        </div>
                    </div>
                </div>
                <div class="cell large-10 bus__form">
                    <form>
                        <div class="grid-x justify-content-center">
                            <div class="cell large-18">
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
                                    <div class="cell text-align-center"><br><a class="button z-index-1" href="#" type="submit">Забронировать
                                            место</a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
