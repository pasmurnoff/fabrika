@if(!empty($files))
    <div class="files-gallery {{ $class or '' }}">
        @foreach($files as $item)
            @if(!empty($item['img']) and !empty($item['file']))
                <div class="files-gallery__item">
                    <a href="{{ $item['file']['url'] }}" class="files-gallery__item-link" target="_blank">
                        <img src="{{ $item['img']['sizes']['medium'] }}" class="files-gallery__item-img" alt="{!! $item['img']['alt'] !!}">
                    </a>
                </div>
            @endif
        @endforeach
    </div>
@endif
