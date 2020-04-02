@switch($prodCat->slug)
    @case('detskaja-kollekcija')
    First case...
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