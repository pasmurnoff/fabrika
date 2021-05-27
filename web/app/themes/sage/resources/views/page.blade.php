@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div class="defaultpage">

            @include('components.thumbnail.wrap')

            <div class="the-content">
                @php the_content() @endphp
            </div>

        </div>
    @endwhile
    @include('components.writeus.writeus')
@endsection
