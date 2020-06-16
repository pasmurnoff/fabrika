@php
    $prev = get_previous_post_link( '%link', '%title', true );
    $next = get_next_post_link( '%link', '%title', true );
@endphp
@if($prev || $next)
    <div class="single-navigation mrgn50-top pdng15-top {{ $prev ? '' : 'single-navigation_next' }}">
        @if($prev)
            <div class="single-navigation__navs single-navigation__navs_prev">
                {!! str_replace( '<a ', '<a class="title title_middle" ', $prev ) !!}
                <span class="single-navigation__text text">Предыдущая новость</span>
            </div>
        @endif
        @if($next)
            <div class="single-navigation__navs single-navigation__navs_next">
                {!! str_replace( '<a ', '<a class="title title_middle" ', $next ) !!}
                <span class="single-navigation__text text">Следующая новость</span>
            </div>
        @endif
    </div>
@endif