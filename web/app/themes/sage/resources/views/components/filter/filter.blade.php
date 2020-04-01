<sidebar class="filter-sidebar sidebar">
    <div class="filter-sidebar__wrapper">
        @php dynamic_sidebar( 'filter-sidebar' ); @endphp
    </div>
    @include('components.filter.filter-toggle')
</sidebar>
