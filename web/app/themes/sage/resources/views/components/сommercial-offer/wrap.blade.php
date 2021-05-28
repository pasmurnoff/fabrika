@php
    $offers = get_field('сommercial_offer', $page_id);
@endphp

@if($offers)
    @foreach($offers as $offer)
        <div class="title title_large pdng15-bottom">{!! $offer['title'] !!}</div>
        <div class="block-text">
            @if($offer['text'])
                <div class="block-text__text block-text__text_padding-away">
                    {!! $offer['text'] !!}
                </div>
            @endif
            @if($offer['gallery'])
                <div class="threeimage">
                    @foreach($offer['gallery'] as $image)
                        <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject">
                            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" itemprop="contentUrl">
                        </div>
                    @endforeach
                </div>
            @endif
            @if($offer['button'])
                <a class="block-text__button submit" href="{{ $offer['button']['url'] }}">{!! $offer['button']['title'] !!}</a>
            @endif
        </div>
    @endforeach
@endif

<div class="title title_large mrgn15-bottom">{!! pll_e('Узнайте как будет выглядеть ваш носок') !!}</div>
<div class="block-text block-text_nopad">
    <div class="block-text__text pdng15-bottom">
        {!! pll_e('Заполните форму ниже и мы сделаем вам скидку 10% на первые 10 заказов!') !!}
    </div>
</div>

<form method="POST" class="form">
    <div class="formline">
        <div class="formline__inner">
            <div class="labelwrap labelwrap_line">
                <input type="text" class="input" name="name">
                <label class="label">{{ pll_e('Имя') }}*</label>
            </div>
            <div class="labelwrap labelwrap_line">
                <input type="tel" class="input" name="phone">
                <label class="label">{{ pll_e('Мобильный телефон') }}*</label>
            </div>
            <div class="labelwrap labelwrap_line">
                <input type="email" class="input" name="email">
                <label class="label">{{ pll_e('Электронная почта') }}</label>
            </div>
        </div>
        @include('components.form.elements.privacy')
    </div>
</form>
