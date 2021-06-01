@php
  $manager_features_title = get_field('manager_features_title');
  $manager_features = get_field('manager_features');
@endphp
@if($manager_features_title)
  <div class="workfeatures mrgn35">
    <div class="title title_huge workfeatures__title">Особенности работы с Фабрикой носков</div>
    <div class="workfeatures__inner">
      @if($manager_features)
        @foreach($manager_features as $feature)
          @if($loop->index > 3)
            {{-- допускаем не более 4 элементов --}}
            @break
          @endif
          <div class="workfeatures__item">
            <div class="workfeatures__left">
              @include('icon::workfeatures.feature' . ($loop->index + 1) )
            </div>
            <div class="workfeatures__right">
              <div class="title title_middle workfeatures__titling">{!! $feature['title'] !!}</div>
              <div class="workfeatures__text">{!! $feature['text'] !!} </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
@endif
