<div class="title title_huge form__want">{{ $title or '' }}</div>
<form class="form mrgn35" method="POST">

  <div class="form__col form__col_double">
    <div class="singlerow singlerow_mrgn15">
      <div class="labelwrap labelwrap_single">
        <input type="text" class="input" name="name">
        <label class="label">Фамилия Имя Отчество*</label>
      </div>
    </div>

    <div class="dualrow dualrow_mrgn15">
      <div class="labelwrap labelwrap_dual">
        <input type="tel" class="input" name="name">
        <label class="label">Мобильный телефон*</label>
      </div>
      <div class="labelwrap labelwrap_dual">
        <input type="email" class="input" name="email">
        <label class="label">Электронная почта</label>
      </div>
    </div>

    <div class="singlerow">
      <div class="labelwrap labelwrap_single">
        <input type="text" class="input" name="birthday">
        <label class="label">Дата рождения*</label>
      </div>
    </div>
  </div>

  <div class="form__col form__col_double">
    <div class="singlerow">
      <div class="labelwrap labelwrap_single">
        <textarea name="additional" class="textarea textarea_workwithyou"></textarea>
        <label class="label">Расскажите о себе</label>
      </div>
    </div>
  </div>

  <div class="singlerow_privacy singlerow_privacy_toright singlerow_privacy_managers">
    <div class="form__privacy form__privacy_right">
      Отправляя форму я соглашаюсь<br/> с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями передачи информации</a>
    </div>
    <input type="submit" class="submit" value="{{ $submit }}">
  </div>

</form>
