@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @php the_title() @endphp
    @php the_content() @endphp
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @endwhile
@endsection