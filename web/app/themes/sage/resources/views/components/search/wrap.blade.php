<div class="main-search popup">
    @component('components.search.ajax')
        @slot('item')
            <div class="main-search__cross closepopup" data-popup="main-search">
                @include('icon::common.cross')
            </div>
        @endslot
    @endcomponent
</div>