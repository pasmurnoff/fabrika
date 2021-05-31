{{--
Template Name: Подарочные сертификаты
--}}
@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    @include('components.thumbnail.wrap')

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile

    <div class="title title_large">{{ pll__('Купить подарочные сертификаты') }}</div>
    <form class="form mrgn35" method="POST">

      <div class="singlerow singlerow_mrgn15">
        <div class="labelwrap labelwrap_single">
          <input type="text" class="input" name="name">
          <label class="label">{{ pll__('Фамилия Имя Отчество') . '*' }}</label>
        </div>
      </div>

      <div class="dualrow dualrow_mrgn15">
        <div class="labelwrap labelwrap_dual">
          <input type="text" class="input" name="city">
          <label class="label">{{ pll__('Город') . '*' }}</label>
        </div>
        <div class="labelwrap labelwrap_dual">
          <input type="tel" class="input" name="name">
          <label class="label">{{ pll__('Мобильный телефон') . '*' }}</label>
        </div>
      </div>

      <div class="dualrow dualrow_mrgn15">
        <div class="labelwrap labelwrap_dual">
          <input type="email" class="input" name="email">
          <label class="label">{{ pll__('Электронная почта') }}</label>
        </div>
        <div class="labelwrap labelwrap_dual">
          <input type="text" class="input" name="sertificate-price">
          <label class="label">{{ pll__('Сумма подарочного сертификата') }}</label>
        </div>
      </div>

      @include('components.form.elements.privacy', ['submit' => pll__('Заказать')])

    </form>

  </div>
@endsection
