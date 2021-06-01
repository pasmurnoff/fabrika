@php
  $manager_steps_title = get_field('manager_steps_title');
  $manager_steps = get_field('manager_steps');
@endphp
@if(!empty($manager_steps_title))
  <div class="worksteps mrgn35">
    <div class="title title_huge worksteps__title">{!! $manager_steps_title !!}</div>
    @if($manager_steps)
      <div class="worksteps__inner">
        @foreach($manager_steps as $step)
          @if($loop->index > 3)
            {{-- допускаем не более 4 шагов --}}
            @break
          @endif
          <div class="worksteps__item">
            @include('icon::worksteps.step' . ($loop->index + 1) )
            <div class="worksteps__text">{!! $step['step'] !!}</div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
@endif
