<div class="grid-container">
    <footer class="footer">
        <div class="grid-x large-up-4 medium-up-2 grid-margin-y">
            {{ menu('Главное', 'components.menu.main_bottom') }}
            {{ menu('Главное 2', 'components.menu.main_bottom_second') }}
            <div class="cell">
                <div class="footer__contacts">
                    <div class="footer__worktime">
                        <a class="footer__phone" href="tel:+{{ preg_replace('/[^0-9.]+/', '', $settings["site.main_phone"]->value) }}">
                            {{ $settings["site.main_phone"]->value }}
                        </a>
                        <div>{{ $settings["site.work_time"]->value }}</div>
                    </div>
                    {{ menu('Соц.сети', 'components.menu.main_bottom_social') }}
                </div>
            </div>
            <div class="cell">
                <div class="footer__addres">
                    <div class="footer__addres-item">{{ $settings["site.main_address"]->value}}</div>
                    <div class="footer__addres-item">{{ $settings["site.bank_detalis"]->value }}</div>
                </div>
            </div>
        </div>
    </footer>
</div>
