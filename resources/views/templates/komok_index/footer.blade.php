<div class="grid-container">
    <footer class="footer">
        <div class="grid-x large-up-4 medium-up-2 grid-margin-y">
            {{ menu('Главное', 'components.menu.main_bottom') }}
            {{ menu('Главное 2', 'components.menu.main_bottom_second') }}
            <div class="cell">
                <div class="footer__contacts">
                    <div class="footer__worktime">
                        <a class="footer__phone" href="tel:+{{ preg_replace('/[^0-9.]+/', '', $website_common_settings->main_phone) }}">
                            {{ $website_common_settings->main_phone }}
                        </a>
                        <div>{{ $website_common_settings->work_time }}</div>
                    </div>
                    {{ menu('Соц.сети', 'components.menu.main_bottom_social') }}
                </div>
            </div>
            <div class="cell">
                <div class="footer__addres">
                    <div class="footer__addres-item">{{ $website_common_settings->main_address}}</div>
                    <div class="footer__addres-item">{{ $website_common_settings->bank_details }}</div>
                </div>
            </div>
        </div>
    </footer>
</div>
