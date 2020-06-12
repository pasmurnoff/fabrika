{{--
Template Name: dontuse
--}}

@extends('layouts.app')
@section('content')
  @php
    $loop = new WP_Query([
            'post_type'      => 'city',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
        ]);
  @endphp


  @php
    function to_prepositional($str) {


      if (in_array( substr($str, -1), ['и','о','е','ё','э'])) return $str;
      if (in_array( substr($str, -3), ['ово','ево','ино','ыно'])) return $str;

      $custom_cities = [
          'Москва'=>'Москвы'
      ];
      if (isset($custom_cities[$str])) return $custom_cities[$str];

      $replace = array();
      $replace['2'][] = array('ия','ии');
      $replace['2'][] = array('ия','ии');
      $replace['2'][] = array('ий','ом');
      $replace['2'][] = array('ое','ом');
      $replace['2'][] = array('ая','ой');
      $replace['2'][] = array('ль','ле');
      $replace['1'][] = array('а','е');
      $replace['1'][] = array('о','е');
      $replace['1'][] = array('и','ах');
      $replace['1'][] = array('ы','ах');
      $replace['1'][] = array('ь','и');

      foreach ($replace as $length => $replacement) {
          $str_length = mb_strlen($str, 'UTF-8');
          $find = mb_substr($str, $str_length - $length, $str_length, 'UTF-8');
          foreach($replacement as $try) {
              if ( $find == $try[0] ) {
                  $str = mb_substr($str, 0, $str_length - $length, 'UTF-8');
                  $str .= $try['1'];
                  return $str;
              }
          }
      }
      if ($find == 'е') {
          return $str;
      } else {
          return $str.'е';
      }

  }
  @endphp



  @while ( $loop->have_posts() )
    @php
        $loop->the_post();
        $oldName =  get_field('city-name');
        $newName = to_prepositional($oldName);
        //update_field('city-rod', $newName);
    @endphp
  @endwhile

@endsection
