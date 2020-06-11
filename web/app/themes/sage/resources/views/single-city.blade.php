{{--
    Template Name: Страница города
    Template post type: city
--}}

@extends('layouts.app')

@section('content')
  <div class="city">

    @if( have_rows('city-contact') )
      <div class="points points_contact">

        @while (have_rows('city-contact'))
          @php the_row();

                $address = get_sub_field('address');
                $phone = get_sub_field('phone');
                $mail = get_sub_field('mail');
                $time = get_sub_field('work-time');
          @endphp
          @if($address || $phone || $mail || $time)
            <div class="points__items">
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
    @component('components.banner.simple', ['href' =>'/magazin', 'buttonText' =>'Оптовый магазин носков'])
      @slot('title')
        <div class="mrgn15-bottom">Продажа носков оптом от производителя</div>
        <div>Минимальная партия заказа 100 пар</div>
      @endslot
    @endcomponent

    <div class="text city__text">
      @php echo get_field('city-description'); @endphp
    </div>

{{--    @if(get_field('city-video'))--}}
{{--      <div class="text city__video">--}}
{{--        @php the_field('city-video') @endphp--}}
{{--      </div>--}}
{{--    @endif--}}

    {{--        @php--}}
    {{--            $images = get_field('city-gallery');--}}
    {{--        @endphp--}}
    {{--        @if( $images )--}}
    {{--            <ul class="city-gallery">--}}
    {{--                @foreach( $images as $image )--}}
    {{--                    <li class="city-gallery__item">--}}
    {{--                        <a class="city-gallery__link" href="@php echo esc_url($image['url']) @endphp">--}}
    {{--                            <img--}}
    {{--                                    class="city-gallery__img"--}}
    {{--                                    src="@php echo esc_url($image['sizes']['large']) @endphp"--}}
    {{--                                    alt="@php the_title() @endphp"/>--}}
    {{--                        </a>--}}
    {{--                    </li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        @endif--}}

    @component('components.banner.simple', ['href' =>'/magazin', 'buttonText' =>'Заказать носки'])
      @slot('title')
        <div class="mrgn15-bottom">Изготовление носков по вашему дизайну</div>
        <div>Минимальная партия заказа 100 пар</div>
      @endslot
    @endcomponent

    @component('components.form.default', ['title' => 'Напишите нам'])
      @slot('text')
        Если у вас есть вопрос, предложение или замечание относительно нашей работы, вы можете
        воспользоваться
        формой для связи с нами.
      @endslot
    @endcomponent
  </div>
@endsection
