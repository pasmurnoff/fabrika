{{--
<div class="search ajax-search">
    {{ $item or '' }}
    <div class="search__circle circle_rotate">
        @include('icon::circle')
    </div>
    <input placeholder="Найти носки ..." class="search__input input" type="text" name="keyword">
    <ul class="search__list text"></ul>
</div>
--}}


<form role="search" method="get" class="search ajax-search"
      action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search__circle circle_rotate">
        @include('icon::circle')
    </div>
    <input class="search__input input" type="search"
           class="search__input input"
           value="<?php echo get_search_query(); ?>" name="s" placeholder="Найти носки..."/>
    <ul class="search__list text"></ul>
    <input type="hidden" name="post_type" value="product"/>
</form>