<div class="banner__wrapper banner__wrapper_duo">
  <a href="{{ $href or '#'}}" class="banner_duo">
    <div class="banner__inner_duo">
      <div class="banner__title_duo">{{ $title or '' }}</div>
      <div class="banner__text_duo">{{ $text or '' }}</div>
      <div class="banner__icon_duo">{{ $icon or '' }}</div>
    </div>
    <span class="button banner__button_duo">{{ $buttonText or '' }}</span>
  </a>
  <a href="{{ $href2 or '#'}}" class="banner_duo">
    <div class="banner__inner_duo">
      <div class="banner__title_duo">{{ $title2 or '' }}</div>
      <div class="banner__text_duo">{{ $text2 or '' }}</div>
      <div class="banner__icon_duo">{{ $icon2 or '' }}</div>
    </div>
    <span class="button banner__button_duo">{{ $buttonText2 or '' }}</span>
  </a>
</div>
