{{--
  Template Name: Страница города
  Template post type: city
--}}

@extends('layouts.app')

@section('content')
  <div class="city">
    <div class="mrgn35">
      @include('components.banner.banner-duo')
    </div>

    @include('components.category-output.output', ['overflow' => ''])

    <div class="text city__text mrgn35-top">
      <h2 class="title title_large">Где в городе {{ get_field('city-rod') }} купить носки оптом</h2>
      @php echo get_field('city-description'); @endphp
    </div>

    {{-- @if(get_field('city-video'))
      <div class="text city__video">
        @php the_field('city-video') @endphp
      </div>
    @endif --}}

    {{-- @php
        $images = get_field('city-gallery');
    @endphp --}}
    {{-- @if( $images )
        <ul class="city-gallery">
            @foreach( $images as $image )
                <li class="city-gallery__item">
                    <a class="city-gallery__link" href="@php echo esc_url($image['url']) @endphp">
                        <img
                                class="city-gallery__img"
                                src="@php echo esc_url($image['sizes']['large']) @endphp"
                                alt="@php the_title() @endphp"/>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif --}}

    @include('components.banner.custom-socks')

    @component('components.form.default', ['title' => 'Напишите нам'])
      @slot('text')
        Если у вас есть вопрос, предложение или замечание относительно нашей работы, вы можете
        воспользоваться
        формой для связи с нами.
      @endslot
    @endcomponent

    @php $cityName = get_field('city-name') @endphp
    @if( have_rows('city-contact') )
      <h2 class="title titl_large mrgn35-bottom">Пункты выдачи в {{ get_field('city-rod') }}</h2>
    @endif

    @if( have_rows('city-contact') )
      <div class="points points_contact">

        @while (have_rows('city-contact'))
          @php 
            the_row();

            $address = get_sub_field('address');
            $phone = get_sub_field('phone');
            $mail = get_sub_field('mail');
            $time = get_sub_field('work-time');
          @endphp
          @if($address || $phone || $mail || $time)
            <div class="points__items">
                @if($cityName)
                  <div class="points__title text_grey text_bold">{!! $cityName !!}</div>
                @endif

                @if($address)
                  <div class="points__address points__item">
                    <div class="points__icon">@include('icon::country.city.map-marker')</div>
                    @php echo $address @endphp
                  </div>
                @endif

                @if($phone)
                  <div class="points__phone points__item">
                    <div class="points__icon">@include('icon::country.city.phone')</div>
                    <a class="points__link"
                        href="tel:@php echo preg_replace('/[^0-9]/', '', $phone) @endphp">@php echo $phone @endphp</a>
                  </div>
                @endif

                @if($mail)
                  <div class="points__mail points__item">
                    <div class="points__icon">@include('icon::country.city.envelope')</div>
                    <a class="points__link" href="mailto:@php echo $mail @endphp">@php echo $mail @endphp</a>
                  </div>
                @endif

                @if($time)
                  <div class="points__work points__item">
                    <div class="points__icon">@include('icon::country.city.clock')</div>
                    @php echo $time @endphp
                  </div>
                @endif
            </div>
          @endif
        @endwhile

      </div>
    @endif
  </div>
@endsection
