@switch($prodCat->slug)

    @case('muzhskie-noski')
    @include('components.banner.afisha')
    @break

    @case('zhenskie-noski')
    @include('components.banner.custom-socks')
    @break

    @case('detskie-noski')
    @include('components.banner.manager')
    @break

    @default
    @php echo '' @endphp

@endswitch