@if(has_post_thumbnail($post))
    @php
        $thumbnail_id = get_post_thumbnail_id($post);
        $thumbnail = image_downsize( $thumbnail_id, 'full' ); // массив со всеми переменными картинки
        $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); // достаем альт
        if (empty($thumbnail_alt)) { // если нет альта, то подставляем h1
            $thumbnail_alt = get_the_title();
        }
    @endphp
    <figure itemprop="image" itemscope itemtype="https://schema.org/ImageObject" class="defaultpage__imgwrap">
        <img itemprop="url contentUrl" src="{!! $thumbnail[0] !!}" alt="{!! $thumbnail_alt !!}" class="defaultpage__image">
        <meta itemprop="width" content="{{ $thumbnail[1] }}">
        <meta itemprop="height" content="{{ $thumbnail[2] }}">
        <figcaption itemprop="caption" class="defaultpage__imgwrap-figcaption">{!! $thumbnail_alt !!}</figcaption>
    </figure>
@endif
