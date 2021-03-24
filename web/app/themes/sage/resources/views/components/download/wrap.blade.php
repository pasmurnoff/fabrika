<div class="product__download download">
    <div class="download__pdf">@include('icon::pdf')</div>
    <a class="text download__wrap" href="#">
        Скачать PDF "{!! get_the_title() !!}"
    </a>
</div>

<hr><hr>
@php do_action('generateXLS') @endphp
<hr><hr><hr>
<form action method="post">
    <input type="hidden" name="productPDF">
    <button class="button">Сгенерировать</button>
</form>
<hr><hr><hr>


<div id="vinni_response" style="border: 1px solid red;"></div>

<form id="download__pdf-form" action method="post">
    <input type="hidden" name="product_id" id="download__pdf-id" value="{{ get_the_ID() }}">
    <input type="submit" class="button" value="Пук">
</form>
<hr><hr><hr>