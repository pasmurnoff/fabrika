@php
    $productCategories = get_terms([
        'taxonomy' => "product_cat",
        'parent' => '',
    ])
@endphp
@foreach($productCategories as $prodCat)
    <div class="category-output mrgn35-top">
        @include('components.category-output.all.title')
        @include('components.category-output.list', ['count' => 18, 'overflow' => ''])
    </div>
@endforeach