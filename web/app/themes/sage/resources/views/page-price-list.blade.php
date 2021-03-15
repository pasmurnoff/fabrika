{{--
  Template Name: Генерация прайс листа
--}}
@php do_action('generateXLS') @endphp

<div class="container">
    <form action method="post">
        <input type="hidden" name="XLSGenerate">
        <button class="button">Сгенерировать</button>
    </form>
</div>