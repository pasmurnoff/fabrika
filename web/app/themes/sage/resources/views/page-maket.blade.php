{{--
Template Name: Макет носков
--}}

@extends('layouts.app')
@section('content')
    @include('components.banner.wrap')

    <div class="text pdng35-top">
        <div class="title title_large">{!! get_field('maket_title') !!}</div>
        <div class="text_middle pdng15">{!! get_field('maket_descr') !!}</div>
        <div class="text_bold">{!! get_field('maket_subtitle') !!}</div>
        <div>{!! get_field('maket_subdescr') !!}</div>
    </div>

    <div class="mrgn35">
        <ul class="listnum">
            @php $i = 1; @endphp
            @foreach(get_field('maket_requirements') as $item)
                <li class="listnum__point">
                    <span class="listnum__number">{!! $i !!}</span>
                    <div class="listnum__text">{!! $item['name'] !!}</div>
                </li>
                @php $i++; @endphp
            @endforeach
        </ul>
    </div>

    <div class="title title_huge">{!! get_field('maket_request') !!}</div>

    <form enctype="multipart/form-data" method="POST" class="form mrgn35-bottom mrgn15-top">

        @component('components.form.elements.form-item', ['title' => get_field('maket_format'),'class' => 'checkbox singlerow'])
            @slot('content')
                @foreach(get_field('maket_types') as $item)
                    @include('components.form.elements.checkbox', ['name' => 'format', 'value' => $item['name'],'attr' => $item['default'] ? 'checked' : ''])
                @endforeach
            @endslot
            @slot('text')
                {!! get_field('maket_answer') !!}
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => get_field('maket_email_hint'), 'class' =>'child__mrgn form__col_third'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'email',
                            'label' => get_field('maket_email') ])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => get_field('maket_addcomment'),'text' => get_field('maket_addons'), 'class' => 'form__col_third'])
            @slot('content')
                @include('components.form.elements.textarea', ['name' => 'additional', 'label' => get_field('meket_placeholder')])
            @endslot
        @endcomponent

        @include('components.form.elements.privacy', ['class' => 'form__col_third'])

    </form>

    <div class="text text_middle">
        <div class="pdng15-bottom">
            {!! get_field('maket_example_descr') !!}
        </div>
    </div>

    <div class="maket__drag mrgn35">
        <div class="mainSection">
            <div id="comparison-slider-1" class="bal-container">
                <div class="bal-after" itemscope itemtype="http://schema.org/ImageObject">
                    <img src="@asset('images/components/maket/fabrikanoskov_after.jpg')" alt="Фабрика носков макет"
                         itemprop="contentUrl">
                    <div class="bal-afterPosition afterLabel" itemprop="name">
                        {!! get_field('maket_example_adaptation') !!}
                    </div>
                </div>

                <div class="bal-before">
                    <div class="bal-before-inset" itemscope itemtype="http://schema.org/ImageObject">
                        <img src="@asset('images/components/maket/fabrikanoskov_before.jpg')"
                             alt="Фабрика носков макет" itemprop="contentUrl">
                        <div class="bal-beforePosition beforeLabel" itemprop="name">
                            {!! get_field('maket_example_original') !!}
                        </div>
                    </div>
                </div>

                <div class="bal-handle">
                    <span class=" handle-left-arrow"></span>
                    <span class="handle-right-arrow"></span>
                </div>

            </div>
        </div>
    </div>

    <div class="text pdng35-bottom text_middle">{!! get_field('maket_example_text') !!}</div>
@endsection

