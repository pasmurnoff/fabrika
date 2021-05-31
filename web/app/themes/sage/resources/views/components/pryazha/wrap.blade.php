<div class="pryazha__gallery">
    <div class="title title_large mrgn35-bottom">{{ pll__('Цветовая гамма нашей пряжи') }}</div>
    <div class="pryazha__gallery-wrap">
        @component('components.pryazha.item', ['title' => pll__('Хлопок') . ' 100%'])
            @slot('images')
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_1.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_2.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_3.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_4.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_5.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_6.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_7.jpg')"
                         alt="Хлопковая пряжа 100%">
                </div>
            @endslot
        @endcomponent
        @component('components.pryazha.item', ['title' => pll__('Хлопок') . ' / ' . pll__('Полиэстер')])
            @slot('images')
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_1.jpg')"
                         alt="Пряжа из хлопка и полиэстера">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_2.jpg')"
                         alt="Пряжа из хлопка и полиэстера">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_3.jpg')"
                         alt="Пряжа из хлопка и полиэстера">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_4.jpg')"
                         alt="Пряжа из хлопка и полиэстера">
                </div>
            @endslot
        @endcomponent
        @component('components.pryazha.item', ['title' => pll__('Вискоза')])
            @slot('images')
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_4.jpg')"
                         alt="Вискозовая пряжа">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_5.jpg')"
                         alt="Вискозовая пряжа">
                </div>
                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_7.jpg')"
                         alt="Вискозовая пряжа">
                </div>
            @endslot
        @endcomponent
        @component('components.pryazha.item', ['title' => pll__('Полиэстер') . ' / ' . pll__('Вискоза')])
            @slot('images')

                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_1.jpg')"
                         alt="Пряжа из полиэстера и вискозы">
                </div>

                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_3.jpg')"
                         alt="Пряжа из полиэстера и вискозы">
                </div>

                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_5.jpg')"
                         alt="Пряжа из полиэстера и вискозы">
                </div>

                <div class="pryazha__gallery-img">
                    <img src="@asset('images/components/pryazha/cotton/cotton_7.jpg')"
                         alt="Пряжа из полиэстера и вискозы">
                </div>
            @endslot
        @endcomponent
    </div>
</div>
