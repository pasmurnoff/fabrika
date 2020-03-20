<div class="footer__top">
  @component('blocks.footer.top.column')
    @slot('include')
      @include('blocks.footer.top.blocks.help')
    @endslot
  @endcomponent

  @component('blocks.footer.top.column')
    @slot('include')
      @include('blocks.footer.top.blocks.categories')
      @include('blocks.footer.top.blocks.partners')
    @endslot
  @endcomponent

  @component('blocks.footer.top.column')
    @slot('include')
        @include('blocks.footer.top.blocks.payments')
        @include('blocks.footer.top.blocks.contacts')
      @endslot
  @endcomponent

  @component('blocks.footer.top.column')
    @slot('include')
        @include('blocks.footer.top.blocks.callback')
        @include('blocks.footer.top.blocks.socials')
        @include('blocks.footer.top.blocks.employee')
      @endslot
  @endcomponent
</div>
