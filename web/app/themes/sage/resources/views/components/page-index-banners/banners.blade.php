@switch($prodCat->slug)
    @case('detskaja-kollekcija')
    @include('components.afisha.afisha')
    @break

    @case('zhenskaja-kollekcija')
    Second case...
    @break

    @case('muzhskaja-kollekcija')
    Second case...
    @break

    @default
    @php echo '' @endphp
@endswitch