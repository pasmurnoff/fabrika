{{--Выводим только родительские категории, если необходимо все остальные, то убираем   'parent' => 0 --}}
@php
    $productCategories = get_terms([
        'taxonomy' => "product_cat",
        'orderby' => 'count',
        'parent' => 0
    ])
@endphp
@foreach($productCategories as $prodCat)
    <div class="category-output mrgn35-top">
        @include('components.category-output.title' , ['class' => 'container'])
        @include('components.category-output.list', ['class' => 'category-output__wrapper'])
        @include('components.page-index-banners.banners', ['class' => 'container'])
    </div>
@endforeach

