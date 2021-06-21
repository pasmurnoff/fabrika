<div class="labelwrap {{$positionClass or ''}}">
    <div class="radio-rating">
        <input type="radio" id="star-5" name="{{ $name or '' }}" value="5">
        <label for="star-5" title="Оценка «5»">
            @include('icon::star')
        </label>
        <input type="radio" id="star-4" name="{{ $name or '' }}" value="4">
        <label for="star-4" title="Оценка «4»">
            @include('icon::star')
        </label>
        <input type="radio" id="star-3" name="{{ $name or '' }}" value="3">
        <label for="star-3" title="Оценка «3»">
            @include('icon::star')
        </label>
        <input type="radio" id="star-2" name="{{ $name or '' }}" value="2">
        <label for="star-2" title="Оценка «2»">
            @include('icon::star')
        </label>
        <input type="radio" id="star-1" name="{{ $name or '' }}" value="1">
        <label for="star-1" title="Оценка «1»">
            @include('icon::star')
        </label>
    </div>
</div>
