{{--Template Name: Пункты выдачи
--}}

@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        <div class="defaultpage__imgwrap">
            <img class="defaultpage__image" src="{{ get_field('getpoints_photo')['url'] }}"
                 alt="Пункты выдачи">
        </div>
        <div class="block-text">
            <div class="block-text__text block-text__text_bold">{!! get_field('getpoints_title') !!}</div>
            <ul class="block-text__list">
                @if(get_field('getpoints_list'))
                    @foreach(get_field('getpoints_list') as $item)
                        <li class="block-text__point">
                            <p>{!! $item['name'] !!}</p>
                            @if($item['description'])
                                <p class="block-text__descr">{!! $item['description'] !!}</p>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>

    <div class="country__wrapper">
        <div class="country">
            @include('icon::country.armenia')
            <span class="title country__title">Армения</span>
            <div class="country__city">
                <a class="country__link" href="#">Ереван</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.belarus')
            <span class="title country__title">Беларусь</span>
            <div class="country__city">
                <a class="country__link" href="#">Барановичи</a>
                <a class="country__link" href="#">Бобруйск</a>
                <a class="country__link" href="#">Борисов</a>
                <a class="country__link" href="#">Брест</a>
                <a class="country__link" href="#">Витебск</a>
                <a class="country__link" href="#">Гомель</a>
                <a class="country__link" href="#">Гродно</a>
                <a class="country__link" href="#">Минск</a>
                <a class="country__link" href="#">Могилёв</a>
                <a class="country__link" href="#">Новополоцк</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.kazakhstan')
            <span class="title country__title">Казахстан</span>
            <div class="country__city">
                <a class="country__link" href="#">Актау</a>
                <a class="country__link" href="#">Актобе</a>
                <a class="country__link" href="#">Алматы</a>
                <a class="country__link" href="#">Атырау (Гурьев)</a>
                <a class="country__link" href="#">Караганда</a>
                <a class="country__link" href="#">Кокшетау</a>
                <a class="country__link" href="#">Костанай</a>
                <a class="country__link" href="#">Кызылорда</a>
                <a class="country__link" href="#">Нур-Султан</a>
                <a class="country__link" href="#">Павлодар</a>
                <a class="country__link" href="#">Талдыкорган</a>
                <a class="country__link" href="#">Тараз</a>
                <a class="country__link" href="#">Темиртау</a>
                <a class="country__link" href="#">Уральск</a>
                <a class="country__link" href="#">Усть-Каменогорск</a>
                <a class="country__link" href="#">Шымкент</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.kyrgyzstan')
            <span class="title country__title">Киргизия</span>
            <div class="country__city">
                <a class="country__link" href="#">Бишкек</a>
                <a class="country__link" href="#">Ош</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.china')
            <span class="title country__title">Китай</span>
            <div class="country__city">
                <a class="country__link" href="#">Вэньчжоу</a>
                <a class="country__link" href="#">Гуанчжоу</a>
                <a class="country__link" href="#">Дунгуань</a>
                <a class="country__link" href="#">Дуннин</a>
                <a class="country__link" href="#">Иу</a>
                <a class="country__link" href="#">Маньчжурия</a>
                <a class="country__link" href="#">Наньтун</a>
                <a class="country__link" href="#">Пекин</a>
                <a class="country__link" href="#">Суйфэньхэ</a>
                <a class="country__link" href="#">Сучжоу</a>
                <a class="country__link" href="#">Сямынь</a>
                <a class="country__link" href="#">Урумчи</a>
                <a class="country__link" href="#">Ханчжоу</a>
                <a class="country__link" href="#">Харбин</a>
                <a class="country__link" href="#">Хэйхэ</a>
                <a class="country__link" href="#">Циндао</a>
                <a class="country__link" href="#">Чаочжоу</a>
                <a class="country__link" href="#">Чэнду</a>
                <a class="country__link" href="#">Шанхай</a>
                <a class="country__link" href="#">Шэньчжэнь</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.mongolia')
            <span class="title country__title">Монголия</span>
            <div class="country__city">
                <a class="country__link" href="#">Улан-батор</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.uae')
            <span class="title country__title">ОАЭ</span>
            <div class="country__city">
                <a class="country__link" href="#">Дубай</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.russia')
            <span class="title country__title">Россия</span>
            <div class="country__city">
                <a class="country__link" href="/abakan/">Абакан</a>
                <a class="country__link" href="#">Абинск</a>
                <a class="country__link" href="#">Азов</a>
                <a class="country__link" href="#">Аксай</a>
                <a class="country__link" href="#">Александров</a>
                <a class="country__link" href="#">Алексеевка</a>
                <a class="country__link" href="#">Алексин</a>
                <a class="country__link" href="#">Алушта</a>
                <a class="country__link" href="/almetevsk/">Альметьевск</a>
                <a class="country__link" href="#">Амурск</a>
                <a class="country__link" href="#">Анапа</a>
                <a class="country__link" href="/angarsk/">Ангарск</a>
                <a class="country__link" href="#">Анжеро-Судженск</a>
                <a class="country__link" href="#">Апатиты</a>
                <a class="country__link" href="#">Апрелевка</a>
                <a class="country__link" href="#">Апшеронск</a>
                <a class="country__link" href="/arzamas/">Арзамас</a>
                <a class="country__link" href="/armavir/">Армавир</a>
                <a class="country__link" href="#">Арсеньев</a>
                <a class="country__link" href="/artem/">Артем</a>
                <a class="country__link" href="/arhangelsk/">Архангельск</a>
                <a class="country__link" href="#">Асбест</a>
                <a class="country__link" href="#">Асино</a>
                <a class="country__link" href="/astrahan/">Астрахань</a>
                <a class="country__link" href="#">Ахтубинск</a>
                <a class="country__link" href="/achinsk/">Ачинск</a>
                <a class="country__link" href="#">Аша</a>
                <a class="country__link" href="#">Балабаново</a>
                <a class="country__link" href="/balakovo/">Балаково</a>
                <a class="country__link" href="#">Балахна</a>
                <a class="country__link" href="/balashiha/">Балашиха</a>
                <a class="country__link" href="/barnaul/">Барнаул</a>
                <a class="country__link" href="/batajsk/">Батайск</a>
                <a class="country__link" href="#">Бахчисарай</a>
                <a class="country__link" href="#">Белая Калитва</a>
                <a class="country__link" href="/belgorod/">Белгород</a>
                <a class="country__link" href="#">Белебей</a>
                <a class="country__link" href="#">Белово</a>
                <a class="country__link" href="#">Белорецк</a>
                <a class="country__link" href="#">Белореченск</a>
                <a class="country__link" href="/berdsk/">Бердск</a>
                <a class="country__link" href="/berezniki/">Березники</a>
                <a class="country__link" href="#">Березовский</a>
                <a class="country__link" href="/bijsk/">Бийск</a>
                <a class="country__link" href="#">Биробиджан</a>
                <a class="country__link" href="#">Бирск</a>
                <a class="country__link" href="/blagoveshensk/">Благовещенск</a>
                <a class="country__link" href="#">Благодарный</a>
                <a class="country__link" href="#">Бор</a>
                <a class="country__link" href="#">Борзя</a>
                <a class="country__link" href="#">Борисоглебск</a>
                <a class="country__link" href="#">Боровичи</a>
                <a class="country__link" href="/bratsk/">Братск</a>
                <a class="country__link" href="#">Бронницы</a>
                <a class="country__link" href="/bryansk/">Брянск</a>
                <a class="country__link" href="#">Бугульма</a>
                <a class="country__link" href="#">Буденновск</a>
                <a class="country__link" href="#">Бузулук</a>
                <a class="country__link" href="#">Бутово</a>
                <a class="country__link" href="#">Великие Луки</a>
                <a class="country__link" href="/velikij-novgorod/">Великий Новгород</a>
                <a class="country__link" href="#">Великий Устюг</a>
                <a class="country__link" href="#">Вельск</a>
                <a class="country__link" href="#">Верхняя Пышма</a>
                <a class="country__link" href="#">Видное</a>
                <a class="country__link" href="/vladivostok/">Владивосток</a>
                <a class="country__link" href="/vladikavkaz/">Владикавказ</a>
                <a class="country__link" href="/vladimir">Владимир</a>
                <a class="country__link" href="#">ВНИИССОК</a>
                <a class="country__link" href="/volgograd/">Волгоград</a>
                <a class="country__link" href="/volgodonsk/">Волгодонск</a>
                <a class="country__link" href="#">Волжск</a>
                <a class="country__link" href="/volzhskij/">Волжский</a>
                <a class="country__link" href="/vologda/">Вологда</a>
                <a class="country__link" href="#">Волоколамск</a>
                <a class="country__link" href="#">Волхов</a>
                <a class="country__link" href="/voronezh/">Воронеж</a>
                <a class="country__link" href="#">Воскресенск</a>
                <a class="country__link" href="#">Воскресенское поселение</a>
                <a class="country__link" href="#">Восточный мкр., округ Балашиха</a>
                <a class="country__link" href="#">Воткинск</a>
                <a class="country__link" href="#">Всеволожск</a>
                <a class="country__link" href="#">Выборг</a>
                <a class="country__link" href="#">Выкса</a>
                <a class="country__link" href="#">Вышний Волочёк</a>
                <a class="country__link" href="#">Вязники</a>
                <a class="country__link" href="#">Вязьма</a>
                <a class="country__link" href="#">Вятские Поляны</a>
                <a class="country__link" href="#">Галич</a>
                <a class="country__link" href="#">Гатчина</a>
                <a class="country__link" href="#">Геленджик</a>
                <a class="country__link" href="#">Георгиевск</a>
                <a class="country__link" href="#">Глазов</a>
                <a class="country__link" href="#">Голицыно</a>
                <a class="country__link" href="#">Горелово</a>
                <a class="country__link" href="#">Горно-Алтайск</a>
                <a class="country__link" href="#">Городец</a>
                <a class="country__link" href="#">Горячий Ключ</a>
                <a class="country__link" href="/groznij/">Грозный</a>
                <a class="country__link" href="#">Грязи</a>
                <a class="country__link" href="#">Губаха</a>
                <a class="country__link" href="#">Губкин</a>
                <a class="country__link" href="#">Губкинский</a>
                <a class="country__link" href="#">Гуково</a>
                <a class="country__link" href="#">Гусь-Хрустальный</a>
                <a class="country__link" href="/derbent/">Дербент</a>
                <a class="country__link" href="#">Десеновское</a>
                <a class="country__link" href="#">Джанкой</a>
                <a class="country__link" href="/dzerzhinsk/">Дзержинск</a>
                <a class="country__link" href="#">Дзержинский</a>
                <a class="country__link" href="/dimitrovgrad/">Димитровград</a>
                <a class="country__link" href="#">Динская</a>
                <a class="country__link" href="#">Дмитров</a>
                <a class="country__link" href="/dolgoprudnij/">Долгопрудный</a>
                <a class="country__link" href="/domodedovo/">Домодедово</a>
                <a class="country__link" href="#">Донецк</a>
                <a class="country__link" href="#">Дрожжино</a>
                <a class="country__link" href="#">Дубна</a>
                <a class="country__link" href="/evpatoriya/">Евпатория</a>
                <a class="country__link" href="#">Егорьевск</a>
                <a class="country__link" href="#">Ейск</a>
                <a class="country__link" href="/ekaterinburg/">Екатеринбург</a>
                <a class="country__link" href="#">Елабуга</a>
                <a class="country__link" href="/elec/">Елец</a>
                <a class="country__link" href="#">Елизово</a>
                <a class="country__link" href="/essentuki/">Ессентуки</a>
                <a class="country__link" href="#">Ефремов</a>
                <a class="country__link" href="#">Железноводск</a>
                <a class="country__link" href="/zheleznogorsk/">Железногорск</a>
                <a class="country__link" href="#">Железнодорожный</a>
                <a class="country__link" href="/zhukovskij/">Жуковский</a>
                <a class="country__link" href="#">Забайкальск</a>
                <a class="country__link" href="#">Заводоуковск</a>
                <a class="country__link" href="#">Заволжье</a>
                <a class="country__link" href="#">Заинск</a>
                <a class="country__link" href="#">Заречный</a>
                <a class="country__link" href="#">Заринск</a>
                <a class="country__link" href="#">Звенигород</a>
                <a class="country__link" href="#">Зеленогорск</a>
                <a class="country__link" href="#">Зеленоград</a>
                <a class="country__link" href="#">Зеленодольск</a>
                <a class="country__link" href="#">Зеленокумск</a>
                <a class="country__link" href="#">Зерноград</a>
                <a class="country__link" href="/zlatoust/">Златоуст</a>
                <a class="country__link" href="#">Ивангород</a>
                <a class="country__link" href="/ivanovo/">Иваново</a>
                <a class="country__link" href="#">Ивантеевка</a>
                <a class="country__link" href="#">Игра</a>
                <a class="country__link" href="/izhevsk/">Ижевск</a>
                <a class="country__link" href="#">Изобильный</a>
                <a class="country__link" href="#">Иноземцево</a>
                <a class="country__link" href="#">Ирбит</a>
                <a class="country__link" href="/irkutsk/">Иркутск</a>
                <a class="country__link" href="#">Искитим</a>
                <a class="country__link" href="#">Истра</a>
                <a class="country__link" href="#">Ишим</a>
                <a class="country__link" href="/joshkar-ola/">Йошкар-Ола</a>
                <a class="country__link" href="/kazan/">Казань</a>
                <a class="country__link" href="/kaliningrad/">Калининград</a>
                <a class="country__link" href="/kaluga/">Калуга</a>
                <a class="country__link" href="/kamensk-uralskij/">Каменск-Уральский</a>
                <a class="country__link" href="#">Каменск-Шахтинский</a>
                <a class="country__link" href="/kamishin/">Камышин</a>
                <a class="country__link" href="#">Камышлов</a>
                <a class="country__link" href="#">Канаш</a>
                <a class="country__link" href="#">Канск</a>
                <a class="country__link" href="/kaspijsk/">Каспийск</a>
                <a class="country__link" href="#">Качканар</a>
                <a class="country__link" href="#">Кашира</a>
                <a class="country__link" href="/kemerovo/">Кемерово</a>
                <a class="country__link" href="/kerch/">Керчь</a>
                <a class="country__link" href="#">Кизляр</a>
                <a class="country__link" href="#">Кимры</a>
                <a class="country__link" href="#">Кингисепп</a>
                <a class="country__link" href="#">Кинешма</a>
                <a class="country__link" href="#">Киржач</a>
                <a class="country__link" href="#">Кириши</a>
                <a class="country__link" href="/kirov/">Киров</a>
                <a class="country__link" href="#">Кировск</a>
                <a class="country__link" href="#">Киселёвск</a>
                <a class="country__link" href="/kislovodsk/">Кисловодск</a>
                <a class="country__link" href="#">Климовск</a>
                <a class="country__link" href="#">Клин</a>
                <a class="country__link" href="#">Клинцы</a>
                <a class="country__link" href="/kovrov/">Ковров</a>
                <a class="country__link" href="#">Когалым</a>
                <a class="country__link" href="/kolomna/">Коломна</a>
                <a class="country__link" href="#">Колпино</a>
                <a class="country__link" href="#">Кольцово</a>
                <a class="country__link" href="#">Кольчугино</a>
                <a class="country__link" href="#">Коммунарка</a>
                <a class="country__link" href="/komsomolsk-na-amure/">Комсомольск-на-Амуре</a>
                <a class="country__link" href="#">Конаково</a>
                <a class="country__link" href="/kopejsk/">Копейск</a>
                <a class="country__link" href="/korolev/">Королев</a>
                <a class="country__link" href="#">Коротчаево</a>
                <a class="country__link" href="/kostroma/">Кострома</a>
                <a class="country__link" href="#">Котельники</a>
                <a class="country__link" href="#">Котельнич</a>
                <a class="country__link" href="#">Котлас</a>
                <a class="country__link" href="#">Красная Поляна</a>
                <a class="country__link" href="#">Красноармейск</a>
                <a class="country__link" href="/krasnogorsk/">Красногорск</a>
                <a class="country__link" href="#">Красногорск, Южный</a>
                <a class="country__link" href="/krasnodar/">Краснодар</a>
                <a class="country__link" href="#">Красное Село</a>
                <a class="country__link" href="#">Краснокамск</a>
                <a class="country__link" href="#">Краснообск</a>
                <a class="country__link" href="#">Красноперекопск</a>
                <a class="country__link" href="#">Краснотурьинск</a>
                <a class="country__link" href="#">Красноуфимск</a>
                <a class="country__link" href="/krasnoyarsk/">Красноярск</a>
                <a class="country__link" href="#">Кронштадт</a>
                <a class="country__link" href="#">Кропоткин</a>
                <a class="country__link" href="#">Крымск</a>
                <a class="country__link" href="#">Кстово</a>
                <a class="country__link" href="#">Кубинка</a>
                <a class="country__link" href="#">Кудымкар</a>
                <a class="country__link" href="#">Кунгур</a>
                <a class="country__link" href="/kurgan/">Курган</a>
                <a class="country__link" href="#">Курганинск</a>
                <a class="country__link" href="#">Куровское</a>
                <a class="country__link" href="/kursk/">Курск</a>
                <a class="country__link" href="#">Курчатов</a>
                <a class="country__link" href="/kizil/">Кызыл</a>
                <a class="country__link" href="#">Кыштым</a>
                <a class="country__link" href="#">Лабинск</a>
                <a class="country__link" href="#">Лангепас</a>
                <a class="country__link" href="#">Ленинградская</a>
                <a class="country__link" href="#">Лениногорск</a>
                <a class="country__link" href="#">Ленинск-Кузнецкий</a>
                <a class="country__link" href="#">Лермонтов</a>
                <a class="country__link" href="#">Лесной</a>
                <a class="country__link" href="#">Лесосибирск</a>
                <a class="country__link" href="#">Ликино-Дулево</a>
                <a class="country__link" href="/lipeck/">Липецк</a>
                <a class="country__link" href="#">Лиски</a>
                <a class="country__link" href="#">Лобня</a>
                <a class="country__link" href="#">Луга</a>
                <a class="country__link" href="#">Луховицы</a>
                <a class="country__link" href="#">Лыткарино</a>
                <a class="country__link" href="/lyuberci/">Люберцы</a>
                <a class="country__link" href="#">Людиново</a>
                <a class="country__link" href="#">Магадан</a>
                <a class="country__link" href="#">Магнитогорск</a>
                <a class="country__link" href="/majkop/">Майкоп</a>
                <a class="country__link" href="#">Малаховка</a>
                <a class="country__link" href="#">Маркс</a>
                <a class="country__link" href="/mahachkala/">Махачкала</a>
                <a class="country__link" href="#">Мегион</a>
                <a class="country__link" href="#">Междуреченск</a>
                <a class="country__link" href="#">Мелеуз</a>
                <a class="country__link" href="/miass/">Миасс</a>
                <a class="country__link" href="#">Миллерово</a>
                <a class="country__link" href="#">Минеральные Воды</a>
                <a class="country__link" href="#">Минусинск</a>
                <a class="country__link" href="#">Мирный</a>
                <a class="country__link" href="#">Митино</a>
                <a class="country__link" href="#">Михайловка</a>
                <a class="country__link" href="#">Михайловск</a>
                <a class="country__link" href="#">Мичуринск</a>
                <a class="country__link" href="#">Можайск</a>
                <a class="country__link" href="#">Монино</a>
                <a class="country__link" href="#">Мончегорск</a>
                <a class="country__link" href="/moskva/">Москва</a>
                <a class="country__link" href="#">Московский</a>
                <a class="country__link" href="#">Мосрентген</a>
                <a class="country__link" href="#">Мурино</a>
                <a class="country__link" href="/murmansk/">Мурманск</a>
                <a class="country__link" href="/murom/">Муром</a>
                <a class="country__link" href="/mitishi/">Мытищи</a>
                <a class="country__link" href="/naberezhnie-chelni/">Набережные Челны</a>
                <a class="country__link" href="#">Надым</a>
                <a class="country__link" href="#">Назарово</a>
                <a class="country__link" href="/nazran/">Назрань</a>
                <a class="country__link" href="/nalchik/">Нальчик</a>
                <a class="country__link" href="#">Наро-Фоминск</a>
                <a class="country__link" href="#">Нарьян-Мар</a>
                <a class="country__link" href="#">Нахабино</a>
                <a class="country__link" href="/nahodka/">Находка</a>
                <a class="country__link" href="/nevinnomissk/">Невинномысск</a>
                <a class="country__link" href="#">Невьянск</a>
                <a class="country__link" href="#">Некрасовка</a>
                <a class="country__link" href="#">Нерюнгри</a>
                <a class="country__link" href="/neftekamsk/">Нефтекамск</a>
                <a class="country__link" href="/nefteyugansk/">Нефтеюганск</a>
                <a class="country__link" href="/nizhnevartovsk/">Нижневартовск</a>
                <a class="country__link" href="/nizhnekamsk/">Нижнекамск</a>
                <a class="country__link" href="/nizhny_novgorod/">Нижний Новгород</a>
                <a class="country__link" href="/nizhnij-tagil/">Нижний Тагил</a>
                <a class="country__link" href="#">Нижняя Тура</a>
                <a class="country__link" href="#">Новоалександровск</a>
                <a class="country__link" href="#">Новоалтайск</a>
                <a class="country__link" href="/novokuzneck/">Новокузнецк</a>
                <a class="country__link" href="/novokujbishevsk/">Новокуйбышевск</a>
                <a class="country__link" href="/novomoskovsk/">Новомосковск</a>
                <a class="country__link" href="#">Ново-Переделкино</a>
                <a class="country__link" href="/novorossijsk/">Новороссийск</a>
                <a class="country__link" href="/novosibirsk/">Новосибирск</a>
                <a class="country__link" href="#">Новотроицк</a>
                <a class="country__link" href="#">Новоуральск</a>
                <a class="country__link" href="/novocheboksarsk/">Новочебоксарск</a>
                <a class="country__link" href="/novocherkassk/">Новочеркасск</a>
                <a class="country__link" href="/novoshahtinsk/">Новошахтинск</a>
                <a class="country__link" href="/novijurengoj/">Новый Уренгой</a>
                <a class="country__link" href="/noginsk/">Ногинск</a>
                <a class="country__link" href="/norilsk/">Норильск</a>
                <a class="country__link" href="/noyabrsk/">Ноябрьск</a>
                <a class="country__link" href="#">Нягань</a>
                <a class="country__link" href="/obninsk/">Обнинск</a>
                <a class="country__link" href="#">Обухово</a>
                <a class="country__link" href="/odincovo/">Одинцово</a>
                <a class="country__link" href="#">Озерск</a>
                <a class="country__link" href="/oktyabrskij/">Октябрьский</a>
                <a class="country__link" href="/omsk/">Омск</a>
                <a class="country__link" href="/orel/">Орел</a>
                <a class="country__link" href="/orenburg/">Оренбург</a>
                <a class="country__link" href="/orehovo-zuevo/">Орехово-Зуево</a>
                <a class="country__link" href="/orsk/">Орск</a>
                <a class="country__link" href="#">Островцы</a>
                <a class="country__link" href="#">Острогожск</a>
                <a class="country__link" href="#">Отрадный</a>
                <a class="country__link" href="#">Павлово</a>
                <a class="country__link" href="#">Павловский Посад</a>
                <a class="country__link" href="/penza/">Пенза</a>
                <a class="country__link" href="/pervouralsk/">Первоуральск</a>
                <a class="country__link" href="/perm/">Пермь</a>
                <a class="country__link" href="#">Петергоф (Петродворец)</a>
                <a class="country__link" href="/petrozavodsk/">Петрозаводск</a>
                <a class="country__link" href="/petropavlovsk-kamchatskij/">Петропавловск-Камчатский</a>
                <a class="country__link" href="#">Пограничный</a>
                <a class="country__link" href="/podolsk/">Подольск</a>
                <a class="country__link" href="#">Покров</a>
                <a class="country__link" href="#">Покровка</a>
                <a class="country__link" href="#">Полевской</a>
                <a class="country__link" href="#">Похвистнево</a>
                <a class="country__link" href="#">Приморско-Ахтарск</a>
                <a class="country__link" href="#">Приозерск</a>
                <a class="country__link" href="/prokopevsk/">Прокопьевск</a>
                <a class="country__link" href="#">Протвино</a>
                <a class="country__link" href="/pskov/">Псков</a>
                <a class="country__link" href="#">Путилково</a>
                <a class="country__link" href="#">Пушкин</a>
                <a class="country__link" href="/pushkino/">Пушкино</a>
                <a class="country__link" href="/pyatigorsk/">Пятигорск</a>
                <a class="country__link" href="/ramenskoe/">Раменское</a>
                <a class="country__link" href="#">Ревда</a>
                <a class="country__link" href="/reutov/">Реутов</a>
                <a class="country__link" href="#">Ржев</a>
                <a class="country__link" href="#">Рославль</a>
                <a class="country__link" href="#">Россошь</a>
                <a class="country__link" href="/rostov-na-donu/">Ростов-на-Дону</a>
                <a class="country__link" href="/rubcovsk/">Рубцовск</a>
                <a class="country__link" href="#">Руза</a>
                <a class="country__link" href="#">Рузаевка</a>
                <a class="country__link" href="/ribinsk/">Рыбинск</a>
                <a class="country__link" href="/ryazan/">Рязань</a>
                <a class="country__link" href="#">Саки</a>
                <a class="country__link" href="/salavat/">Салават</a>
                <a class="country__link" href="#">Салехард</a>
                <a class="country__link" href="#">Сальск</a>
                <a class="country__link" href="/samara/">Самара</a>
                <a class="country__link" href="/sankt-peterburg/">Санкт-Петербург</a>
                <a class="country__link" href="/saransk/">Саранск</a>
                <a class="country__link" href="#">Сарапул</a>
                <a class="country__link" href="/saratov/">Саратов</a>
                <a class="country__link" href="#">Саров</a>
                <a class="country__link" href="#">Саяногорск</a>
                <a class="country__link" href="#">Светлоград</a>
                <a class="country__link" href="/sevastopol/">Севастополь</a>
                <a class="country__link" href="#">Северный</a>
                <a class="country__link" href="#">Северный, Белгородский р-н</a>
                <a class="country__link" href="/severodvinsk/">Северодвинск</a>
                <a class="country__link" href="#">Североуральск</a>
                <a class="country__link" href="/seversk/">Северск</a>
                <a class="country__link" href="#">Северская</a>
                <a class="country__link" href="/sergievposat/">Сергиев Посад</a>
                <a class="country__link" href="#">Серов</a>
                <a class="country__link" href="/serpuhov/">Серпухов</a>
                <a class="country__link" href="#">Сертолово</a>
                <a class="country__link" href="#">Сестрорецк</a>
                <a class="country__link" href="/simferopol/">Симферополь</a>
                <a class="country__link" href="#">Сколково инновационный центр</a>
                <a class="country__link" href="#">Славянск-на-Кубани</a>
                <a class="country__link" href="/smolensk/">Смоленск</a>
                <a class="country__link" href="#">Снежинск</a>
                <a class="country__link" href="#">Советский</a>
                <a class="country__link" href="#">Соликамск</a>
                <a class="country__link" href="#">Солнечногорск</a>
                <a class="country__link" href="#">Солнцево</a>
                <a class="country__link" href="#">Сосновый Бор</a>
                <a class="country__link" href="#">Софрино</a>
                <a class="country__link" href="/sochi">Сочи</a>
                <a class="country__link" href="/stavropol/">Ставрополь</a>
                <a class="country__link" href="#">Старая Купавна</a>
                <a class="country__link" href="/starij-oskol/">Старый Оскол</a>
                <a class="country__link" href="/sterlitamak/">Стерлитамак</a>
                <a class="country__link" href="#">Стрежевой Новые</a>
                <a class="country__link" href="#">Строитель</a>
                <a class="country__link" href="#">Ступино</a>
                <a class="country__link" href="#">Судак</a>
                <a class="country__link" href="/surgut/">Сургут</a>
                <a class="country__link" href="#">Сухой Лог</a>
                <a class="country__link" href="#">Сходня</a>
                <a class="country__link" href="/sizran/">Сызрань</a>
                <a class="country__link" href="/siktivkar/">Сыктывкар</a>
                <a class="country__link" href="#">Сысерть</a>
                <a class="country__link" href="#">Тавда</a>
                <a class="country__link" href="/taganrog/">Таганрог</a>
                <a class="country__link" href="#">Тайшет</a>
                <a class="country__link" href="#">Талнах</a>
                <a class="country__link" href="/tambov/">Тамбов</a>
                <a class="country__link" href="#">Тарасково</a>
                <a class="country__link" href="/tver/">Тверь</a>
                <a class="country__link" href="#">Темрюк</a>
                <a class="country__link" href="#">Тимашевск</a>
                <a class="country__link" href="#">Тихвин</a>
                <a class="country__link" href="#">Тихорецк</a>
                <a class="country__link" href="#">Тобольск</a>
                <a class="country__link" href="/tolyatti/">Тольятти</a>
                <a class="country__link" href="#">Томилино</a>
                <a class="country__link" href="/tomsk/">Томск</a>
                <a class="country__link" href="#">Торжок</a>
                <a class="country__link" href="#">Тосно</a>
                <a class="country__link" href="#">Трехгорный</a>
                <a class="country__link" href="#">Троицк, Москов. обл.</a>
                <a class="country__link" href="#">Троицк, Чел. обл</a>
                <a class="country__link" href="#">Туапсе</a>
                <a class="country__link" href="#">Туймазы</a>
                <a class="country__link" href="/tula/">Тула</a>
                <a class="country__link" href="/tumen/">Тюмень</a>
                <a class="country__link" href="/ulan-ude/">Улан-Удэ</a>
                <a class="country__link" href="/ulyanovsk/">Ульяновск</a>
                <a class="country__link" href="#">Урай</a>
                <a class="country__link" href="#">Урюпинск</a>
                <a class="country__link" href="#">Усолье-Сибирское</a>
                <a class="country__link" href="#">Успенское</a>
                <a class="country__link" href="/ussurijsk/">Уссурийск</a>
                <a class="country__link" href="#">Усть-Лабинск</a>
                <a class="country__link" href="/ufa/">Уфа</a>
                <a class="country__link" href="#">Ухта</a>
                <a class="country__link" href="#">Учалы</a>
                <a class="country__link" href="#">Феодосия</a>
                <a class="country__link" href="#">Фролово</a>
                <a class="country__link" href="#">Фрязино</a>
                <a class="country__link" href="/habarovsk/">Хабаровск</a>
                <a class="country__link" href="#">Ханты-Мансийск</a>
                <a class="country__link" href="/hasavyurt/">Хасавюрт</a>
                <a class="country__link" href="/himki/">Химки</a>
                <a class="country__link" href="#">Хотьково, Сергиево-Посадский р-н</a>
                <a class="country__link" href="#">Цимлянск</a>
                <a class="country__link" href="#">Чайковский</a>
                <a class="country__link" href="#">Чебаркуль</a>
                <a class="country__link" href="/cheboksari/">Чебоксары</a>
                <a class="country__link" href="/chelyabinsk/">Челябинск</a>
                <a class="country__link" href="/cherepovec/">Череповец</a>
                <a class="country__link" href="/cherkessk/">Черкесск</a>
                <a class="country__link" href="#">Черноголовка</a>
                <a class="country__link" href="#">Черногорск</a>
                <a class="country__link" href="#">Черноморское</a>
                <a class="country__link" href="#">Чернушка</a>
                <a class="country__link" href="#">Чехов</a>
                <a class="country__link" href="#">Чистополь</a>
                <a class="country__link" href="/chita/">Чита</a>
                <a class="country__link" href="#">Чусовой</a>
                <a class="country__link" href="#">Шадринск</a>
                <a class="country__link" href="#">Шарыпово</a>
                <a class="country__link" href="#">Шатура</a>
                <a class="country__link" href="#">Шаховская</a>
                <a class="country__link" href="/shahti/">Шахты</a>
                <a class="country__link" href="#">Шушары</a>
                <a class="country__link" href="#">Шуя</a>
                <a class="country__link" href="#">Щекино</a>
                <a class="country__link" href="/shelkovo/">Щелково</a>
                <a class="country__link" href="#">Щербинка</a>
                <a class="country__link" href="#">Электрогорск</a>
                <a class="country__link" href="/elektrostal/">Электросталь</a>
                <a class="country__link" href="#">Электроугли</a>
                <a class="country__link" href="/elista/">Элиста</a>
                <a class="country__link" href="/engels/">Энгельс</a>
                <a class="country__link" href="#">Юбилейный</a>
                <a class="country__link" href="#">Югорск</a>
                <a class="country__link" href="/ujno-sahalinsk/">Южно-Сахалинск</a>
                <a class="country__link" href="#">Южноуральск</a>
                <a class="country__link" href="#">Юрга</a>
                <a class="country__link" href="#">Юрюзань</a>
                <a class="country__link" href="#">Яблоновский</a>
                <a class="country__link" href="/yakutsk/">Якутск</a>
                <a class="country__link" href="#">Ялта</a>
                <a class="country__link" href="#">Ялуторовск</a>
                <a class="country__link" href="#">Янино-1</a>
                <a class="country__link" href="/yaroslavl/">Ярославль</a>
                <a class="country__link" href="#">Ярцево</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.usa')
            <span class="title country__title">США</span>
            <div class="country__city">
                <a class="country__link" href="#">Ньюарк</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.turkey')
            <span class="title country__title">Турция</span>
            <div class="country__city">
                <a class="country__link" href="#">Стамбул</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.uzbekistan')
            <span class="title country__title">Узбекистан</span>
            <div class="country__city">
                <a class="country__link" href="#">Ташкент</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.czech')
            <span class="title country__title">Чехия</span>
            <div class="country__city">
                <a class="country__link" href="#">Прага</a>
            </div>
        </div>
        <div class="country">
            @include('icon::country.south-korea')
            <span class="title country__title">Южная Корея</span>
            <div class="country__city">
                <a class="country__link" href="#">Пусан</a>
            </div>
        </div>
    </div>
@endsection
