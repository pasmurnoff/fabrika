@php
  //$side = {{ $right }} ? 'workorder__item_right' : 'workorder__item_left';
@endphp

@if ($right)
  <div class="workorder__item workorder__item_right">
    <div class="workorder__line">
      <div class="workorder__circle">
        <div class="workorder__num">{{ $num or '' }}</div>
      </div>
      <div class="workorder__subline"></div>
    </div>
    <div class="workorder__block">
      <div class="workorder__titling title title_middle">{{ $title or '' }}</div>
      <div class="workorder__text">{{ $text or '' }}</div>
    </div>
  </div>
@else
  <div class="workorder__item workorder__item_left">
    <div class="workorder__block">
      <div class="workorder__titling title title_middle">{{ $title or '' }}</div>
      <div class="workorder__text">{{ $text or '' }}</div>
    </div>
    <div class="workorder__line @if(isset($last)) workorder__line_last @endif">
      <div class="workorder__circle">
        <div class="workorder__num">{{ $num or '' }}</div>
      </div>
      <div class="workorder__subline {{ $last or '' }}"></div>
    </div>
  </div>
@endif


