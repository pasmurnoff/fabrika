{{--Template Name: Носки оптом
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="work-order mrgn50">
      <div class="title title_large pdng35-bottom">
        Порядок работы со склада
      </div>
      <ol class="text work-order__list">
        <li>Поступление запроса по необходимому артикулу, размеру и цвету</li>
        <li>Подтверждение наличия на складе, если необходимый артикул отсутствуют на складе в нужном количестве,
          производителем предлагаются условия производства
        </li>
        <li>Заключение договора</li>
        <li>Оплата стоимости тиража</li>
        <li>Отгрузка или производство тиража</li>
        <li>Доставка</li>
      </ol>
    </div>
    @include('components.category-output.all.wrap', ['overflow' => ''])

    @while(have_posts()) @php the_post() @endphp
      @include('components.thumbnail.wrap')
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile

  </div>

  @include('components.whyus.whyus')
@endsection
