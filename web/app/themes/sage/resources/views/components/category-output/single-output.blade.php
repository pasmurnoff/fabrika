<div class="category-output mrgn35-top">
    <div class="category-output__title-wrap mrgn35-bottom pdng15-bottom">
        <h2 class="title title_large category-output_title">{{ $title or '' }}</h2>
        <a href="{{ $href or '' }}"
           class="button button_transparent">{{ $button or '' }}</a>
    </div>

    <ul class="category-output__list products columns-6">
        {{ $productLoop or '' }}
    </ul>
</div>