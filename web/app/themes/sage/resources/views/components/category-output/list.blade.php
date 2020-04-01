@foreach ($products as $product)
    @php setup_postdata($product) @endphp
    @php $productId = $product->get_id() @endphp
    @include('components.category-output.product')
@endforeach