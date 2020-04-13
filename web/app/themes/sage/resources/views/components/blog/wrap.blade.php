@php
    $params = array(
'post_type' => 'post', // тип постов - записи
'numberposts' => 4, // получить 5 постов, можно также использовать posts_per_page
'orderby' => 'date', // сортировать по дате
'order' => 'DESC', // по убыванию (сначала - свежие посты)
'suppress_filters' => true // 'posts_*' и 'comment_feed_*' фильтры игнорируются
);

$posts = get_posts($params);
@endphp


<div class="blog">
    <div class="blog__wrap mrgn35-bottom pdng15-bottom">
        <a class="blog__title blog__title_index title title_huge"
           href="@php  echo get_permalink(get_option( 'page_for_posts' )) @endphp">Блог о носках</a>
    </div>

    <ul class="blog__list mrgn35-top">
        @foreach($posts as $post)
            <li class="blog__list-item mrgn35-bottom">
                <a class="blog__link blog__title_index" href="@php echo get_permalink($post); @endphp">
                    <div class="blog__list-img">
                        @php echo get_the_post_thumbnail( $post->ID, 'medium'); @endphp
                    </div>
                    <h3 class="title title_middle mrgn15 blog__title_index">@php echo get_the_title($post); @endphp</h3>
                </a>
                <div class="text">@php echo get_the_excerpt($post->ID); @endphp</div>
            </li>
        @endforeach
    </ul>
</div>
