@php
    $review = get_posts([
        'post_status' => 'publish',
        'numberposts' => '-1',
        'post_type'   => 'review',
    ]);
@endphp



<pre>
<?php
    var_dump(get_field('review_rating', 26454));
    var_dump(get_field('review_rating', 26463));
    print_r($review);
?>
</pre>
