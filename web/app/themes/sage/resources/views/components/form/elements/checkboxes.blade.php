@php
    $type = $type ?? 'checkbox';
@endphp
@foreach($items as $item)
    @include('components.form.elements.' . $type, [
        'name'  => $name,
        'value' => $item['value'],
        'attr'  => ($item['checked'] != 1) ? '' : 'checked="checked"',
    ])
@endforeach
