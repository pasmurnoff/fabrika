{{--Template Name: Менеджер по продажам
--}}

@extends('layouts.app')

@section('content')

    @include('components.banner.wrap')

    @include('components.worksteps.worksteps')
    @include('components.workformat.workformat')
    @include('components.workfeatures.workfeatures')

    @while(have_posts()) @php the_post() @endphp
        <div class="defaultpage">
            <div class="the-content">
                @php the_content() @endphp
            </div>
        </div>
    @endwhile

    @include('components.form.default', ['id' => 'manager-form', 'title' => pll__('Я хочу работать с вами')])
@endsection
