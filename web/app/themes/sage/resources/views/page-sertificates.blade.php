{{--
Template Name: Подарочные сертификаты
--}}
@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov_podarochnie-sertifikati.jpg')"
           alt="Подарочные сертификаты">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile

    <div class="title title_large">{{ __('Купить подарочные сертификаты', 'sage') }}</div>
    <form class="form mrgn35" method="POST">

      <div class="singlerow singlerow_mrgn15">
        <div class="labelwrap labelwrap_single">
          <input type="text" class="input" name="name">
          <label class="label">{{ __('Фамилия Имя Отчество', 'sage') . '*' }}</label>
        </div>
      </div>

      <div class="dualrow dualrow_mrgn15">
        <div class="labelwrap labelwrap_dual">
          <input type="text" class="input" name="city">
          <label class="label">{{ __('Город', 'sage') . '*' }}</label>
        </div>
        <div class="labelwrap labelwrap_dual">
          <input type="tel" class="input" name="name">
          <label class="label">{{ __('Мобильный телефон', 'sage') . '*' }}</label>
        </div>
      </div>

      <div class="dualrow dualrow_mrgn15">
        <div class="labelwrap labelwrap_dual">
          <input type="email" class="input" name="email">
          <label class="label">{{ __('Электронная почта', 'sage') }}</label>
        </div>
        <div class="labelwrap labelwrap_dual">
          <input type="text" class="input" name="sertificate-price">
          <label class="label">{{ __('Сумма подарочного сертификата', 'sage') }}</label>
        </div>
      </div>

      @include('components.form.elements.privacy', ['submit' => 'Заказать'])

    </form>

  </div>
@endsection
