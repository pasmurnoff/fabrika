@if ($prodCat && !is_wp_error($prodCat))
  <div class="category-output__title-wrap mrgn35 pdng15-bottom {{ $class or '' }}">
    <h2 class="title title_large category-output_title">
      {!! $prodCat->name !!}
      @if (is_singular('city'))
        {!! ' в ' . get_field('city-rod') . ' – Фабрика носков в ' . get_field('city-rod') !!}
      @endif
    </h2>
    <a href="{!!  get_term_link($prodCat) !!}" class="button button_transparent">
      {!! $prodCat->name !!}
    </a>
  </div>
@endif