@php
    $review = get_posts([
        'post_status' => 'publish',
        'numberposts' => '-1',
        'post_type'   => 'review',
    ]);
@endphp

<pre>
<?php
    print_r($review);
?>
</pre>
