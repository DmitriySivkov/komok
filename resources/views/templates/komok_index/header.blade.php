<div class="grid-container">
    <header class="header">
        <a class="header__logo" href="/" title="На главную">
            <img src="{{ asset('i/logo.svg') }}">
        </a>
        <nav class="nav" id="nav">
            <div class="nav__links">
                {{ menu('Главное', 'components.menu.main_top') }}
                {{ menu('Главное 2', 'components.menu.main_top_second') }}
            </div>
        </nav>
        <div class="work-time">
            <div class="work-time__wrapper">
                <div class="work-time__item">
                    <a class="work-time__link" href="tel:+{{ preg_replace('/[^0-9.]+/', '', $website_common_settings->main_phone) }}">
                        {{ $website_common_settings->main_phone }}
                    </a>
                </div>
                <div class="work-time__item">{{ $website_common_settings->work_time }}</div>
            </div>
            <button class="burger" id="navToggle" type="button">
                <span class="burger__item">Menu</span>
            </button>
        </div>
    </header>
</div>
