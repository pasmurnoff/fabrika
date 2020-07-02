{{--Выводим только родительские категории, если необходимо все остальные, то убираем   'parent' => 0 --}}
@php
        $productCategories = get_terms([
            'taxonomy' => "product_cat",
            'orderby' => 'count',
        ])
@endphp
@foreach($productCategories as $prodCat)
    <div class="category-output mrgn35-top">
        @include('components.category-output.title')
        @include('components.category-output.list', ['overflow' => ''])
        @include('components.page-index-banners.banners')
    </div>
@endforeach

