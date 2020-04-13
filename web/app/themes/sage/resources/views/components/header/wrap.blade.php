@include('components.header.banner')

<header class="header">
    <div class="container">
        @include('components.hamburger.wrap')
        @include('components.header.top')
        @include('components.header.bottom')
    </div>
    @include('components.main-sidebar.wrap')
    @include('components.search.wrap')
</header>
