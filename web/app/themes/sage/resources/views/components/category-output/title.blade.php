<div class="category-output__title-wrap mrgn35 pdng15-bottom {{ $class or '' }}">
  <h2 class="title title_large category-output_title">
    {!! $prodCat->name !!}
    @if (is_singular('city'))
      {!! ' в ' . get_field('city-rod') . ' – Фабрика носков в ' . get_field('city-rod') !!}
    @endif
  </h2>
  {{--    <a href="@php echo get_term_link($prodCat) @endphp"
          class="button button_transparent">Вся @php echo mb_strtolower($prodCat->name) @endphp </a>--}}
  <a href="@php echo get_term_link($prodCat) @endphp" class="button button_transparent">
    @php echo $prodCat->name @endphp
  </a>
</div>