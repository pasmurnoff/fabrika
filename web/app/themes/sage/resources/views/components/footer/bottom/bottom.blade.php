<div class="footer__bottom">
    <div class="container">
    <div class="footer-menu__bottom">
        {!! bem_menu('footer_bottom_1','footer-menu') !!}
    </div>
    <div class="footer__privacy">
        {!! get_field('main_footer_text', get_option( 'page_on_front' )) !!}
        <br/><br/>
        © {!! date('Y') !!}
        {!! get_field('main_footer_inn', get_option( 'page_on_front' )) !!}
    </div>
    <div class="footer-menu__bottom">
        {!! bem_menu('footer_bottom_2','footer-menu') !!}
    </div>
    <div class="footer__brand">
        @include('icon::made-russia')
    </div>
    </div>
</div>
