<div class="product__download download">
    <form id="download__pdf-form" action method="post">
        <input type="hidden" name="product_id" id="download__pdf-id" value="{{ get_the_ID() }}">
        <div class="download__pdf-icon">@include('icon::pdf')</div>
        <input type="submit" class="download__pdf-button" value="Скачать PDF «{!! get_the_title() !!}»">
    </form>
</div>
