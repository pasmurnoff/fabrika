<div class="radio-rating labelwrap {{$positionClass or ''}}">
    <div class="radio-rating__wrap radioInputValidate">
        {{-- цикл должен быть в обратном порядке --}}
        @for ($i = 5; $i >= 1; $i--)

            <input type="radio" id="star-{{ $i }}" name="{{ $name or '' }}" value="{{ $i }}">
            <label for="star-{{ $i }}" title="Оценка «{{ $i }}»">
                @include('icon::star')
            </label>
        @endfor
    </div>
</div>
