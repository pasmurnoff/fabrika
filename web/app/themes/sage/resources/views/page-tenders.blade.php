{{--Template Name: Участие в тендерах
--}}

@extends('layouts.app')

@section('content')
    @component('components.banner.banner', ['href' => '/noski-optom', 'buttonText' => 'Носки оптом', 'href2' => '/na-zakaz', 'buttonText2' => 'Носки на заказ'])
        @slot('title')
            Участвуем в тендерах на производство <br> носков, кологоток и чулок
        @endslot

        @slot('text')
            Расширяем базу деловых контактов: ищем заказчиков носков, чулок и колготок.
            Не только в региональных центрах, но и небольших городах РФ.
            Производим и продаем чулочно-носочную продукцию оптом.
        @endslot

        @slot('icon')
            <img width="210" src="@asset('images/components/tenders/FabrikaNoskov_Tender.png')"
                 alt="Производство и продажа носков по низким ценам">
        @endslot

    @endcomponent
    <div class="tenders mrgn50">
        <div class="tenders__title title title_huge text_thin mrgn50-bottom pdng50">
            Фабрика Носков — Самая крупная чулочно-носочная фабрика России. Мы единственные отгружаем нашу продукцию
            (носки, чулоки и колготки) в 171 город России и стран СНГ.
        </div>
        <div class="tenders__block mrgn50-bottom pdng50-bottom">
            <div class="tenders__block-left">
                <div class="tenders__block-left_first title title_large mrgn35-bottom">Доставка по России и всему миру
                </div>
                <div class="text text_large mrgn15-bottom">Доставка писем, посылок и грузов в рамках закупок:
                    коммерческих и
                    государственных
                    <nobr>(по 44-ФЗ и 223-ФЗ).</nobr>
                </div>
                <div class="text text_large">Подготовим выгодные условия для заказчиков и расширим функционал, если ваш
                    тендер этого потребует. Государственным организациям поможем составить ТЗ и предоставим коммерческое
                    предложение.
                </div>
            </div>
            <div class="tenders__block-right">
                <img src="@asset('images/components/tenders/go_tenders.jpg')"
                     alt="Фабрика носков. Участвуем в тендерах на производство носков, кологоток и чулок">
            </div>
        </div>
        <div class="tenders__block mrgn50-bottom pdng50">
            <div class="tenders__block-left">
                <div class="title title_large mrgn35-bottom">С 2005 года мы открыли более 200 пунктов выдачи в 171
                    городе России
                </div>
            </div>
            <div class="tenders__block-right tenders__block-right_exclude">
                <ul class="tenders__list">
                    <li class="tenders__point">
                        <b>Доставка носков</b>, чулок и колготок оптом в любой город России и стран СНГ.
                    </li>
                    <li class="tenders__point"><b>Полный комплекс</b> сервисов и услуг для розничных магазинов:
                        крупный опт,
                        мелкий опт, возврат, продукция по вашему дизайну и др.
                    </li>
                    <li class="tenders__point">
                        <b>Гибкие цены и предложения</b> для покупателей. Большой выбор материлов и быстрая скорость
                        вязки
                        чулочно-носочных изделий
                    </li>
                    <li class="tenders__point"><b>Фулфилмент:</b> прием и обработка заказов, комплектация и упаковка,
                        складское хранение, доставка и возврат.
                    </li>
                    <li class="tenders__point">
                        <b>Авиа Перевозка:</b> перевозки грузов от 30 кг. Гарантируем свободные места у авиаперевозчиков
                        даже в
                        высокий сезон.
                    </li>
                </ul>
            </div>
        </div>

        <div class="tenders__block tenders__block_bg mrgn50 pdng35-bottom">
            <div class="tenders__title tenders__title_bg title title_huge text_thin mrgn50-bottom">Зарегистрированы на
                <b>20 коммерческих электронных площадках</b>, а
                также на <b>крупнейших федеральных</b>:
            </div>
            <ul class="tenders__list tenders__list_bg">
                <li class="tenders__point tenders__point_bg">Единая электронная торговая площадка</li>
                <li class="tenders__point tenders__point_bg">Система торгов «Сбербанк-АСТ»</li>
                <li class="tenders__point tenders__point_bg">ЭТП RTS tender</li>
                <li class="tenders__point tenders__point_bg">Cистема электронных торгов ZakazRF</li>
                <li class="tenders__point tenders__point_bg">ЭТП Госзакупки ММВБ</li>
                <li class="tenders__point tenders__point_bg">Торговый портал "Фабрикант.ру"</li>
                <li class="tenders__point tenders__point_bg">Портал поставщиков г. Москвы</li>
            </ul>
        </div>

        <div class="tenders__callback pdng50">
            <div class="tenders__callback-item">
                <div class="title mrgn15-bottom text_large text_bold text_black">По вопросам закупок в Российской Федерации</div>
                <div class="tenders__contact mrgn15-bottom text_middle text text_black">
                    Красильников Никита <br><span class="tenders__status">директор отдела продаж</span><br> <a
                            href="tel:+79297256165">+7 (929) 725
                        61 65</a>
                </div>
                <div class="tenders__contact text_middle text text_black">
                    Барбашин Андрей <br><span class="tenders__status">младший менеджер по тендерам</span><br> <a
                            href="tel:+79297256165">+7 (929)
                        725 61 65</a>
                </div>
            </div>
            <div class="tenders__callback-item">
                <div class="title mrgn15-bottom text_large text_bold text_black">В странах СНГ</div>
                <div class="tenders__contact mrgn15-bottom text_middle text text_black">
                    Нажалова Анна <br><span class="tenders__status">менеджер по продажам в странах СНГ</span><br> <a
                            href="tel:+79297256165">+7
                        (929) 725 61 65</a>
                </div>
                <div class="tenders__contact text_middle text text_black">
                    Ерофеев Артем <br><span class="tenders__status">менеджер по тендерам</span><br> <a
                            href="tel:+79297256165">+7 (929) 725 61
                        65</a>
                </div>
            </div>
        </div>

        <div class="tenders__more text text_large text_black mrgn35 pdng35-bottom">
            Узнайте больше, написав на электронную почту <a
                    href="mailto:tender@fabrikanoskov.ru">tender@fabrikanoskov.ru</a> <br>
            Или позвоните по телефону <a href="tel:88004441156">8 800 444 11 56</a>
        </div>
    </div>
@endsection