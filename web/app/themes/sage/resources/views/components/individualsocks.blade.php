@php
  $individual_title = get_field('na_zakaz_individual_title', $page_id);
  $individual_list = get_field('na_zakaz_individual_list', $page_id);
@endphp
@if($individual_title)
  <div class="individualsocks {{ $classes or '' }}">
    <div class="individualsocks__title title title_huge">{!! $individual_title !!}</div>
    @if($individual_list)
      @php
        // Разобьем массив на 2 части
        $list = array_chunk($individual_list, ceil(count($individual_list)/2));
      @endphp
      <div class="individualsocks__inner">

        {{-- START ЛЕВАЯ ЧАСТЬ --}}
        @if($list[0])
          <div class="individualsocks__column individualsocks__column_left">
            @foreach($list[0] as $left)
              <div class="individualsocks__item">
                <div class="individualsocks__titling title title_middle">{!! $left['title'] !!}</div>
                <div class="individualsocks__text">{!! $left['desc'] !!}</div>
              </div>
            @endforeach
          </div>
        @endif
        {{-- END ЛЕВАЯ ЧАСТЬ --}}

        <div class="individualsocks__column individualsocks__column_center">
          <div class="individualsocks__image">
            <img class="individualsocks__img" src="@asset('images/components/individualsocks/noski_na_zakaz_po_designu.gif')"
                 alt="{{ $individual_title }}">
          </div>
        </div>

        {{-- START ПРАВАЯ ЧАСТЬ --}}
        @if($list[1])
          <div class="individualsocks__column individualsocks__column_right">
            @foreach($list[1] as $right)
              <div class="individualsocks__item">
                <div class="individualsocks__titling title title_middle">{!! $right['title'] !!}</div>
                <div class="individualsocks__text">{!! $right['desc'] !!}</div>
              </div>
            @endforeach
          </div>
        @endif
        {{-- END ПРАВАЯ ЧАСТЬ --}}

      </div>
    @endif
  </div>
@endif

<div class="the-content">
  {!! get_field('na_zakaz_individual_text', $page_id) !!}
</div>
