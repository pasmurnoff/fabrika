@php
    $page_id = get_the_ID();
    $banner_title = get_field('banner_title', $page_id );
    $banner_bg = get_field('banner_bg', $page_id );
    $classes = empty($banner_bg) ? '' : 'banner_bg';
@endphp
@if($banner_title)
    @php
        $banner_buttons = get_field('banner_buttons', $page_id);
        $banner_image = get_field('banner_image', $page_id);
    @endphp
    <div class="banner banner_single {{ $classes }}">
        <div class="banner__inner">
            <div class="banner__side banner__side_left">
                <div class="banner__cont-wrap">
                    <div class="banner__title title title_large">{!! get_field( 'banner_title' ) !!}</div>
                    <div class="banner__text">{!! get_field( 'banner_text', $page_id ) !!}</div>
                </div>
                @if(!empty($banner_buttons))
                    <div class="banner__btn-wrap">
                        @foreach($banner_buttons AS $button)
                            <a href="{{ $button['link']['url'] or '#'}}" class="button banner__button">{{ $button['link']['title'] or '' }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
            @if($banner_image)
                <div class="banner__side banner__side_right">
                    <div class="banner__icon">
                        {!! wp_get_attachment_image( $banner_image['ID'] ) !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif
