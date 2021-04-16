{{--Template Name: Условия оплаты
--}}

@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
            <img class="defaultpage__image" itemprop="contentUrl"
                 src="@asset('images/defaultpages/uslovia_oplati_noskov.jpg')"
                 alt="Условия оплаты носков">
        </div>

        @while(have_posts()) @php the_post() @endphp
            <div class="the-content">
                @php the_content() @endphp
            </div>
        @endwhile
    </div>
@endsection
