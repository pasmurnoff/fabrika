<div class="footer__top">
    @component('components.footer.top.column')
        @slot('include')
            @include('components.footer.top.blocks.help')
        @endslot
    @endcomponent

    @component('components.footer.top.column')
        @slot('include')
            @include('components.footer.top.blocks.categories')
            @include('components.footer.top.blocks.partners')
        @endslot
    @endcomponent

    @component('components.footer.top.column')
        @slot('include')
            @include('components.footer.top.blocks.payments')
            @include('components.footer.top.blocks.contacts')
        @endslot
    @endcomponent

    @component('components.footer.top.column')
        @slot('include')
            @include('components.footer.top.blocks.support')
            @include('components.footer.top.blocks.callback')
            @include('components.footer.top.blocks.socials')
            @include('components.footer.top.blocks.employee')
            @include('components.footer.top.blocks.price-list')
        @endslot
    @endcomponent
</div>
