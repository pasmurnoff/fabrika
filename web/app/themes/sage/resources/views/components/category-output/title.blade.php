<div class="category-output__title-wrap mrgn35-bottom pdng15-bottom {{ $class or '' }}">
    <h2 class="title title_large category-output_title">@php echo $prodCat->name @endphp</h2>
    <a href="@php echo get_term_link($prodCat) @endphp"
       class="button button_transparent">Вся @php echo mb_strtolower($prodCat->name) @endphp </a>
</div>