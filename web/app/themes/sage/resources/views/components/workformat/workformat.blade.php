@php
  $manager_format_title = get_field('manager_format_title');
  $manager_format_text = get_field('manager_format_text');
@endphp
@if($manager_format_title)
  <div class="workformat mrgn35">
    <div class="title title_huge workformat__title">{!! $manager_format_title !!}</div>
    <div class="workformat__text">{!! $manager_format_text !!}</div>
  </div>
@endif
