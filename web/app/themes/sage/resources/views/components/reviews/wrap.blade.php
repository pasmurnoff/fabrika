@php
    $review = get_posts([
        'post_status' => 'publish',
        'numberposts' => '-1',
        'post_type'   => 'review',
    ]);
@endphp
@if($review)
    <section class="reviews-section" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
        <h2>Отзывы</h2>
        <meta itemprop="name" content="Наркологическая клиника «Альтернатива»">

        <div class="review-item" itemprop="review" itemscope itemtype="http://schema.org/Review">
            <span class="review-title" itemprop="author">Антон</span>
            <div class="review-rating review-rating-5" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" >
                <span itemprop="ratingValue" title="Оценка: 5">5</span> <meta itemprop="bestRating" content="5">
            </div>
            <p itemprop="reviewBody">Отношение в клинике замечательное. Условия комфортные. Цены приемлемые. Спасибо за комфортное лечение.</p>
        </div>

        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <meta itemprop="ratingValue" content="4.9">
            <meta itemprop="bestRating" content="5">
            <meta itemprop="reviewCount" content="41">
        </div>
    </section>
@endif



<pre>
<?php
    //var_dump(get_field('review_rating', 26454));
    //var_dump(get_field('review_rating', 26463));
    print_r($review);
?>
</pre>
