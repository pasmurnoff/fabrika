@php
      $na_zakaz_workorder = get_field('na_zakaz_workorder', $page_id);
@endphp
@if($na_zakaz_workorder)
      <div class="workorder mrgn35">
            <div class="workorder__title title title_huge">{!! get_field('na_zakaz_workorder_title', $page_id) !!}</div>
            <div class="workorder__inner">
                  @foreach($na_zakaz_workorder as $workorder)
                        @php
                              $right = !($loop->iteration & 1) ? true : false;
                              $last = $loop->last ? 'workorder__subline_last' : '';
                        @endphp
                        @component('components.workorder.workorder-item', ['num' => $loop->iteration, 'right' => $right, 'last' => $last])
                              @slot('title')
                                    {!! $workorder['title'] or '' !!}
                              @endslot

                              @slot('text')
                                    {!! $workorder['desc'] or '' !!}
                              @endslot
                        @endcomponent
                  @endforeach
            </div>
      </div>
@endif
