@switch($prodCat->slug)

    @case('detskaja-kollekcija')
    @include('components.banner.afisha')
    @break

    @case('zhenskaja-kollekcija')
    @include('components.banner.custom-socks')
    @break

    @case('muzhskaja-kollekcija')
    @include('components.banner.manager')
    @break

    @default
    @php echo '' @endphp
@endswitch