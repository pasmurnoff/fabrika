<div class="panel__item">
    <a class="panel__account panel__link"
       href="@php echo get_permalink(get_option('woocommerce_myaccount_page_id')) @endphp">
        <i class="panel__icon">@include('icon::panel.user')</i>
        @if(!is_user_logged_in())
            @include('components.panel.notice', ['text' => 'Войти / Зарегистрироваться'])

        @else
            @include('components.panel.notice', ['text' => 'Личный кабинет'])
        @endif
    </a>
</div>