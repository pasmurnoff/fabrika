@if ($prodCat && !is_wp_error($prodCat))
  <div class="category-output__title-wrap mrgn35 pdng15-bottom {{ $class or '' }}">
    <h2 class="title title_large category-output_title"{!! $prodCat->name !!}</h2>

    @php 
      $parentArr = [
        'detskoe', 
        'zhenskoe', 
        'muzhskoe',
      ];
    @endphp

    @if(!in_array($prodCat->slug, $parentArr))
      <a href="{!! get_term_link($prodCat) !!}" class="button button_transparent">{{ $prodCat->name }} оптом</a>
    @elseif($prodCat->slug == 'detskoe')
      <a href="{!! get_term_link($prodCat) !!}" class="button button_transparent">Открыть детскую коллекцию</a>
    @elseif($prodCat->slug == 'zhenskoe')
      <a href="{!! get_term_link($prodCat) !!}" class="button button_transparent">Открыть женскую коллекцию</a>
    @elseif($prodCat->slug == 'muzhskoe')
      <a href="{!! get_term_link($prodCat) !!}" class="button button_transparent">Открыть мужскую коллекцию</a>
    @endif
  </div>
@endif