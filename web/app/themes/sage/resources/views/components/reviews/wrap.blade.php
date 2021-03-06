@php
    $organization_title = 'Фабрика Носков';
    $reviews = get_posts([
        'post_status' => 'publish',
        'numberposts' => '-1',
        'post_type'   => 'review',
    ]);
@endphp
@if($reviews)
    <section class="reviews-section" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
        <h2 class="title title_large mrgn35">Отзывы</h2>
        <meta itemprop="name" content="{{ $organization_title }}">

        @foreach($reviews as $review)
            @php
                $review_id = $review->ID;
                $review_position = get_field('review_position', $review_id);
                $review_organization = get_field('review_organization', $review_id);
                $review_rating = get_field('review_rating', $review_id) ?? 5;
                $review_img = get_field('review_img', $review_id);
                $aggregate_rating[] = $review_rating; // для подсчета средней оценки
            @endphp

            <div class="reviews-section__item" itemprop="review" itemscope itemtype="http://schema.org/Review">

                <div class="reviews-section__head">
                    <div class="reviews-section__head-title" itemprop="author">{{ $review->post_title }}</div>
                    <div class="reviews-section__head-info">
                        <div class="reviews-section__head-date">
                            {{ get_the_date('j F Y', $review_id) }}
                        </div>
                        @include('components.rating-result.wrap', ['value' => $review_rating])
                    </div>
                </div>

                @if($review_organization)
                    <div class="reviews-section__description">
                        <div class="reviews-section__description-title">Организация:</div> {{ $review_organization }}
                    </div>
                @endif

                @if($review_position)
                    <div class="reviews-section__description">
                        <div class="reviews-section__description-title">Должность:</div> {{ $review_position }}
                    </div>
                @endif

                <div class="reviews-section__content" itemprop="reviewBody">
                    {!! apply_filters( 'the_content', $review->post_content ) !!}
                </div>

                @if($review_img)
                    {{-- дабавим классы для более мелки миниатюр --}}
                    @include('components.gallery.photo', [
                        'gallery' => $review_img,
                        'itemClass' => 'photo-gallery__item-64',
                        'wrapClass' => 'photo-gallery__wrap-64'
                    ])
                @endif

            </div>
        @endforeach

        @php
            $reviews_count = count($reviews);
            $aggregate_rating = array_sum($aggregate_rating)/$reviews_count; // средняя оценка
            $aggregate_rating = round($aggregate_rating, 1); // округляем до десятых
        @endphp
        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <meta itemprop="ratingValue" content="{{ $aggregate_rating }}">
            <meta itemprop="bestRating" content="5">
            <meta itemprop="reviewCount" content="{{ $reviews_count }}">
        </div>
    </section>
@endif
