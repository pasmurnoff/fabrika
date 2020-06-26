<sidebar class="filter-sidebar sidebar">
    <div class="filter-sidebar__wrapper">
        @php dynamic_sidebar( 'filter-sidebar' ); @endphp
        @include('components.filter.stock')
    </div>
    @include('components.filter.filter-toggle')
</sidebar>
