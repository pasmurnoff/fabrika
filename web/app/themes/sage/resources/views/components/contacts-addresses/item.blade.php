@php
    $opening = $contact['opening'] ? explode("\n", $contact['opening']) : [];
@endphp
<div class="points__items">
    <div class="points__title text_grey text_bold">Москва</div>
    <div class="points__address points__item">
        <div class="points__icon">@include('icon::country.city.map-marker')</div>
        <span class="points__country">{{ $country }}</span>,
        <span class="points__region">{{ $contact['region'] }}</span>,
        <span class="points__city">{{ $contact['city'] }}</span>,
        <span class="points__street">{{ $contact['street'] }}</span>,
        @if($contact['office'])
            <span class="points__house">{{ $contact['house'] }}</span>, <span class="points__office">{{ $contact['office'] }}</span>
        @else
            <span class="points__house">{{ $contact['house'] }}</span>
        @endif
    </div>
    <div class="points__phone points__item">
        <div class="points__icon">@include('icon::country.city.phone')</div>
        <a class="points__link" href="{{ generationPhoneLink($phone) }}">{{ $phone }}</a></div>
    <div class="points__mail points__item">
        <div class="points__icon">@include('icon::country.city.envelope')</div>
        <a class="points__link" href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></div>
    <div class="points__work points__item">
        <div class="points__icon">@include('icon::country.city.clock')</div>
        @foreach ($opening AS $open)
            <span>{{ $open }}</span>
        @endforeach
    </div>
</div>
