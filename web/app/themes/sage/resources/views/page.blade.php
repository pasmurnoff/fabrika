@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    <h1 class="container title title_huge pdng35 title-page">
        @php the_title() @endphp
    </h1>
    @php the_content() @endphp
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @endwhile
@endsection