<!doctype html>
<html {!! get_language_attributes() !!}>
@include('components.head')
<body {{ body_class('preload') }}>
<div class="wrap">
  @php do_action('get_header') @endphp
  @include('components.header.wrap')

  <div class="notfound404">
    <div class="container">
      <div class="notfound404__inner">
        <img src="@asset('images/components/404/fabrikanoskov_404.jpg')" alt="Фабрика носков 404">
        <div class="notfound404__titling">
          <h1 class="notfound404__title title title_huge">Страница не найдена!</h1>
          <div class="notfound404__subtitle title title_large">
            Похоже, вы прошли<br/> по неправильной ссылке
          </div>
          <div class="text notfound404__text">Вернитесь на главную или позвоните нам по телефону: 8 800 444 11 56</div>
          <a href="/" class="notfound404__link">На главную</a>
        </div>
      </div>
    </div>
  </div>

  @php do_action('get_footer') @endphp

  @include('components.footer.footer')


  @php wp_footer() @endphp
</div>
<div class="overlay"></div>
</body>
</html>
