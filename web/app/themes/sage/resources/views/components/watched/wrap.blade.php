@if(isset($_COOKIE['watched']) && is_product())
    @php
        $moreOne = count($_COOKIE['watched']) > 1 ? true : false;
        $isAlone = count($_COOKIE['watched']) == 1 ? true : false;
        $inArray = in_array(get_the_ID(), $_COOKIE['watched']) ? true : false;
    @endphp
    @if ($moreOne || $isAlone)
        @include('components.watched.list')
        @elseif($isAlone && $inArray)
    @endif
@endif