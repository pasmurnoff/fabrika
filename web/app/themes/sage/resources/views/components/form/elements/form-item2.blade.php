<div class="{{ $class or 'singlerow' }}">
    @if(isset($title))
        <div class="title {{ $titleClass or 'title_middle title_thin' }}">{{$title}}</div>
    @endif

    @if(isset($text))
        <div class="text {{ $textClass or 'pdng15-bottom' }}">{{$text or ''}}</div>
    @endif

    {{ $content or '' }}
</div>