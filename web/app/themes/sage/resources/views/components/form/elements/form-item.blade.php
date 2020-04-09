{{--
$class:
Выберите класс singlerow, если необходимо разместить контент в одну строку.
Выберите класс dualrow, если необходимо разместить 2 и более элементов по flex (к примеру 2 в одной строке)
Также можно указать дополнительные классы (checkbox, radio - если хотите использовать чекбоксы)
--}}

<div class="mrgn35-bottom {{ $class or 'singlerow' }}">
    @if(isset($title))
        <div class="title title_middle title_thin">{{$title}}</div>
    @endif

    @if(isset($text))
        <div class="text pdng15-bottom">{{$text or ''}}</div>
    @endif

    {{ $content or '' }}
</div>