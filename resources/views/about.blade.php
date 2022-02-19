@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        {{ Breadcrumbs::render('about') }}
        <div class="article">
            <div class="article__subtitle">Каждая смена лагеря «Комок» имеет<br>свое&ensp;<span class="article__underline">уникальное направление</span>
            </div>
        </div>
        <div class="time"><span class="time__age">7-12 лет</span>
            <div class="time__crossline"></div>
        </div>
        <div class="show">
            <div class="show__item"><img class="show__image" src="i/show/show-4.png">
                <h2 class="show__title">Комок kids</h2>
                <div class="show__content"><h5>Юные лидеры России</h5>
                    <p>Начнем новую жизнь вместе? Разберемся, что такое правильное питание. Научимся правильно двигаться и дышать,
                        подключим осознанность, самоконтроль. Когда нужно ложиться спать и как просыпаться вовремя? Как использовать
                        трекеры сна, настроения и активностей. Био-хакинг — как заставить мозг работать эффективнее. Как преодолевать
                        последствия негативных ситуаций и постичь науку стресс менеджмента (управление стрессами).</p></div>
            </div>
            <div class="show__item"><img class="show__image" src="i/show/show-5.png">
                <h2 class="show__title">Курс «Живые системы»</h2>
                <div class="show__content">На занятиях по «Биотехнологии» участники смены изучат клетки крови, а на
                    Scrath-программировании обучатся визуальному программированию – освоят основы двух направлений и создадут
                    уникальный проект – междисциплинарную 2D игру «Живые системы», которая позволит поиграть за разные клетки
                    человеческого тела: эритроциты, лейкоциты, тромбоциты.
                </div>
            </div>
            <div class="show__item"><img class="show__image" src="i/show/show-6.png">
                <h2 class="show__title">Школа молодого инженера</h2>
                <div class="show__content"><h5>«Программирование» (2-я и 4-я смена)</h5>
                    <p>Изучим самые популярные языки С++, Python и др., создадим игру и разберемся в науке «Биотехнология».</p><h5>
                        «Нейро и биотехнологии» (3-я смена)</h5>
                    <p>Изучение импульсов тела и датчиков, разберемся в молекулярной кухне и основах рац. питания.</p><h5>
                        «Гидравлика и пневматика» (4-я смена)</h5>
                    <p>Как работают приборы, где движущей силой является жидкость или воздух.</p></div>
            </div>
        </div>
        <div class="time"><span class="time__age">13-17 лет</span>
            <div class="time__crossline"></div>
        </div>
        <div class="show">
            <div class="show__item"><img class="show__image" src="i/show/show-1.png">
                <h2 class="show__title">Перезагрузка</h2>
                <div class="show__content">Начнем новую жизнь вместе? Разберемся, что такое правильное питание. Научимся правильно
                    двигаться и дышать, подключим осознанность, самоконтроль. Когда нужно ложиться спать и как просыпаться вовремя?
                    Как использовать трекеры сна, настроения и активностей. Био-хакинг — как заставить мозг работать эффективнее.
                    Как преодолевать последствия негативных ситуаций и постичь науку стресс менеджмента (управление стрессами).
                </div>
            </div>
            <div class="show__item"><img class="show__image" src="i/show/show-2.png">
                <h2 class="show__title">Остаться в живых</h2>
                <div class="show__content">Очень важно уметь самостоятельно обеспечить безопасность, будь то на время отъезда
                    родителей или при переезде в другой город/страну по учебе. Курс для тех, кто готов начать независимую жизнь,
                    разобраться с холодильником, ящиком для инструментов и домашней аптечкой. Научим основам выживания в любом
                    большом городе 21 века в любой самой запутанной ситуации!
                </div>
            </div>
            <div class="show__item"><img class="show__image" src="i/show/show-3.png">
                <h2 class="show__title">Бизнес</h2>
                <div class="show__content">Жизнь в лагере, как бизнес-модель. Вместе научимся зарабатывать и тратить,
                    инвестировать и просчитывать риски. А разобраться нам помогут успешные бизнесмены и предприниматели, которые
                    расскажут про деньги и финансовую грамотность без скучных лекций, но с реальными кейсами и захватывающими
                    играми. Подготовься ко взрослой жизни уже сейчас!
                </div>
            </div>
        </div>
        <section class="section">
            <div class="grid-container">
                <div class="section__background">
                    <div class="grid-x">
                        <div class="cell large-11">
                            <div class="section__content">
                                <div class="section__head">Лагерь «Комок» –&thinsp;<span class="section__violet section__violet_6">это новые навыки&thinsp;</span>для
                                    вашего ребенка
                                </div>
                                <div class="section__text"><p>Помимо основной программы, ребенок попробует себя в увлекательных центрах.
                                        Каждый сможет открыть для себя что-то новое и интересное!</p></div>
                            </div>
                        </div>
                        <div class="cell large-9 large-offset-2"><img class="section__slide" src="./i/camera.png"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="skill">
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-4.png"></div>
                <div class="skill__title">Тележурналистика</div>
                <div class="skill__content">Основы тележурналистики ― сюжет, новости, интервью, операторская работа, монтаж и теле
                    режиссура. Ребята сами подготовят несколько новостных и развлекательных программ.
                </div>
            </div>
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-7.png"></div>
                <div class="skill__title">Актерское мастерство и постановка</div>
                <div class="skill__content">Ребята освоят актерское мастерство, работу с голосом и сценическую речь, сценическое
                    движение и пластику, импровизацию, основы режиссуры и постановки.
                </div>
            </div>
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-6.png"></div>
                <div class="skill__title">Психология</div>
                <div class="skill__content">Развиваем навыки эффективной постановки цели, работаем с самооценкой, страхами,
                    преодолеваем неуверенность, учимся нести ответственность за себя и отстаивать свою точку зрения.
                </div>
            </div>
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-2.png"></div>
                <div class="skill__title">Ораторское мастерство и самопрезентация</div>
                <div class="skill__content">Курс научит правильно говорить, достигать публичными выступлениями нужных целей.
                    Основы техники речи, психологических аспектов и контакта с аудиторией, а самое главное — практика.
                </div>
            </div>
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-3.png"></div>
                <div class="skill__title">Фотомастерство</div>
                <div class="skill__content">Сочетание теории и практики поможет находить красивые ракурсы, передавать атмосферу
                    событий, создавать интересные композиции, редактировать и обрабатывать изображения.
                </div>
            </div>
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-5.png"></div>
                <div class="skill__title">Управление временем</div>
                <div class="skill__content">Основы тайм менеджмента для правильного планирования дня, техника скорочтения ― все
                    это позволит эффективно распоряжаться своим временем и все успевать.
                </div>
            </div>
            <div class="skill__item">
                <div class="skill__image"><img src="./images/skills/skill-1.png"></div>
                <div class="skill__title">Дизайн</div>
                <div class="skill__content">Участникам будет предложена серия занятий по фотографии, дизайну костюмов, интерьеров
                    и ландшафтов, художественному оформлению мероприятий, введению в архитектуру.
                </div>
            </div>
        </div>
        <div class="board">
            <div class="grid-container">
                <div class="board__wrapper board__wrapper_second">
                    <div class="board__content board__content_center">Более 20 лет мы помогаем детям становиться увереннее в себе,
                        быть общительнее и раскрывать свои возможности
                    </div>
                </div>
            </div>
        </div>
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
