{{--Template Name: Договор-оферта
--}}

@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        <div class="block-text">
            <div class="block-text__text">
                @if(have_posts())
                    @while(have_posts())
                        @php the_post(); the_content() @endphp
                    @endwhile
                @endif
            </div>
        </div>
    </div>
@endsection