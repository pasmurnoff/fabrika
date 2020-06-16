<div class="blog__meta">
    @php
        $name = get_the_author_meta('display_name');
        $authorImg = get_avatar_url(get_post(),['size' => 48]);
        $views = get_post_meta(get_post()->ID, 'views', true);
    @endphp
    @if($views)
        <div class="blog__views">
            <div class="views text">
                <i class="fas fa-eye"></i>
                <span class="views__text text">{{ $views }}</span>
            </div>
        </div>
    @endif
    @if($name)
        <div class="blog__author">
            @if($authorImg)
                <div class="author__img">
                    <img src="{!! $authorImg !!}"
                         alt="{!! $name !!}">
                </div>
            @endif
            <div class="text author">
                Автор статьи: <br>
                <b>{!! $name !!}</b>
            </div>
        </div>
    @endif
    <div class="blog__time">
        <div class="text read-time">
            <i class="far fa-clock"></i>
            <span class="read-time__time">Время чтения: {{ read_time_estimate(get_the_content()) }}</span>
        </div>
    </div>
</div>