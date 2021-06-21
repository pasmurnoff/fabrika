@if(!empty($value))
    <div class="rating-result" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
        <span itemprop="ratingValue" class="rating-result__numeric">{{ $value }}</span>
        <meta itemprop="bestRating" content="5">

        <div class="rating-result__stars">
            @for ($i = 1; $i <= 5; $i++)
                <span class="rating-result__stars-item {{ $i <= $value ? 'active' : '' }}">
                    @include('icon::star')
                </span>
            @endfor
        </div>
    </div>
@endif
