<div class="search ajax-search">
    {{ $item or '' }}
    <div class="search__circle circle_rotate">
        @include('icon::circle')
    </div>
    <input placeholder="Найти носки ..." class="search__input input" type="text" name="keyword">
    <ul class="search__list text"></ul>
</div>
