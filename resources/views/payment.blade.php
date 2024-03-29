@extends('templates.komok_index.layout')
@section('body')
    <div class="grid-container">
        <h1 class="h3">Правила оплаты</h1>
        <p>К оплате принимаются платежные карты: VISA Inc, MasterCard WorldWide, МИР.</p>
        <p>Для оплаты товара банковской картой при оформлении заказа в интернет-магазине выберите способ оплаты: банковской картой.</p>
        <p>При оплате заказа банковской картой, обработка платежа происходит на авторизационной странице банка, где Вам необходимо ввести данные Вашей банковской карты:</p>
        <p>

        <ol>
            <li>тип карты</li>
            <li>номер карты,</li>
            <li>срок действия карты (указан на лицевой стороне карты)</li>
            <li>Имя держателя карты (латинскими буквами, точно также как указано на карте)</li>
            <li>CVC2/CVV2 код</li>
        </ol>
        <img style="min-width: 20%" src="{{ asset('images/payment/1.png') }}" alt="Карта">
        </p>
        <p>
        Если Ваша карта подключена к услуге 3D-Secure, Вы будете автоматически переадресованы на страницу банка, выпустившего карту, для прохождения процедуры аутентификации. Информацию о правилах и методах дополнительной идентификации уточняйте в Банке, выдавшем Вам банковскую карту.
        Безопасность обработки интернет-платежей через платежный шлюз банка гарантирована международным сертификатом безопасности PCI DSS. Передача информации происходит с применением технологии шифрования TLS.  Эта информация недоступна посторонним лицам.
        </p>

        <p><strong>
                Советы и рекомендации по необходимым мерам безопасности проведения платежей с использованием банковской карты:
            </strong>
        </p>
        <p>
            <ol>
            <li><strong>берегите свои пластиковые карты</strong> так же, как бережете наличные деньги. Не забывайте их в машине, ресторане, магазине и т.д.</li>
            <li>никогда <strong>не передавайте полный номер своей кредитной карты</strong> по телефону каким-либо лицам или компаниям</li>
            <li>всегда имейте под рукой номер телефона для экстренной связи с банком, выпустившим вашу карту, и в случае ее утраты немедленно свяжитесь с банком</li>
            <li>вводите реквизиты карты только при совершении покупки. Никогда не указывайте их по каким-то другим причинам.</li>
        </ol>

        <img style="min-width: 20%" src="{{ asset('images/payment/2.png') }}" alt="Банковские системы>">

        </p>

        <h3>Возврат товара</h3>
        <p>
            Процедура возврата товара регламентируется статьей 26.1 федерального закона «О защите прав потребителей».
        </p>
        <ul>
            <li>Потребитель вправе отказаться от товара в любое время до его передачи, а после передачи товара - в течение семи дней;</li>
            <li>Возврат товара надлежащего качества возможен в случае, если сохранены его товарный вид, потребительские свойства, а также документ, подтверждающий факт и условия покупки указанного товара;</li>
            <li>Потребитель не вправе отказаться от товара надлежащего качества, имеющего индивидуально-определенные свойства, если указанный товар может быть использован исключительно приобретающим его человеком;</li>
            <li>При отказе потребителя от товара продавец должен возвратить ему денежную сумму, уплаченную потребителем по договору, за исключением расходов продавца на доставку от потребителя возвращенного товара, не позднее чем через десять дней со дня предъявления потребителем соответствующего требования;</li>
        </ul>

        <h3>Отказ от услуги</h3>
        <p>
            Право потребителя на расторжение договора об оказании услуги регламентируется статьей 32 федерального закона «О защите прав потребителей»
        </p>
        <ul>
            <li>Потребитель вправе расторгнуть договор об оказании услуги в любое время, уплатив исполнителю часть цены пропорционально части оказанной услуги до получения извещения о расторжении указанного договора и возместив исполнителю расходы, произведенные им до этого момента в целях исполнения договора, если они не входят в указанную часть цены услуги;</li>
            <li>Потребитель при обнаружении недостатков оказанной услуги вправе по своему выбору потребовать:</li>
            <li>безвозмездного устранения недостатков;</li>
            <li>соответствующего уменьшения цены;</li>
            <li>возмещения понесенных им расходов по устранению недостатков своими силами или третьими лицами;</li>
            <li>Потребитель вправе предъявлять требования, связанные с недостатками оказанной услуги, если они обнаружены в течение гарантийного срока, а при его отсутствии в разумный срок, в пределах двух лет со дня принятия оказанной услуги;</li>
            <li>Исполнитель отвечает за недостатки услуги, на которую не установлен гарантийный срок, если потребитель докажет, что они возникли до ее принятия им или по причинам, возникшим до этого момента;</li>
        </ul>

    </div>
@endsection
