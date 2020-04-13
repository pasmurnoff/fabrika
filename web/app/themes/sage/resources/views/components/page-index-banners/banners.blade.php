@switch($prodCat->slug)

    @case('detskoe')
    @include('components.banner.afisha')
    @break

    @case('zhenskoe')
    @include('components.banner.custom-socks')
    @break

    @case('muzhskoe')
    @include('components.banner.manager')
    @break

    @default
    @php echo '' @endphp
@endswitch