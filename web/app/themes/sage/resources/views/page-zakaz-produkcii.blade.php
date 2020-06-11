{{--
Template Name: Заказ носков на фабриках
--}}

@extends('layouts.app')

@section('content')
  @php
    global $wpdb;
      $fabrics = $wpdb->get_results('SELECT * FROM fv_vendors');
      $managers = $wpdb->get_results('SELECT * FROM fv_contacts');
  @endphp

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/chosen-js@1.8.7/chosen.min.css" rel="stylesheet"></link>

  <div class="manager rmanager">
    <form id="form-send" method="POST" enctype='multipart/form-data'
          action="/app/themes/sage/app/nikita/send.php">
      <h3 class="title title_huge rmanager__title">Заказываем</h3>
      <div class="manager__sku">
        <div class="sku__item" id="item-0">
          <div class="manager__item manager__item-single">
            <input type="text" name="data[0][style]" onclick="togglePlaceholder(this);" required>
            <div class="placeholder__first">Какие носки</div>
          </div>
          <div class="manager__item manager__item-single">
            <input type="text" name="data[0][size]" onclick="togglePlaceholder(this);" required>
            <div class="placeholder__first">Размеры</div>
          </div>
          <div class="manager__item manager__item-single">
            <input type="text" name="data[0][qty]" onclick="togglePlaceholder(this);" required>
            <div class="placeholder__first">Количество</div>
          </div>
          <div class="manager__item manager__item-single">
            <input type="text" name="data[0][price]" onclick="togglePlaceholder(this);" required>
            <div class="placeholder__first">Проходная цена</div>
          </div>
          <div class="manager__item manager__item-single">
            <input type="text" name="data[0][term]" onclick="togglePlaceholder(this);" required>
            <div class="placeholder__first">Срок изготовления</div>
          </div>
          <div class="manager__item manager__item-single">
            <input type="text" name="data[0][compose]" onclick="togglePlaceholder(this);" required>
            <div class="placeholder__first">Состав</div>
          </div>
          <div class="manager__item manager__item-single manager__file-wrap">
            <input type="file" name="photos_0[]" onclick="togglePlaceholder(this);" class="manager__file" multiple
                   onchange="showName(jQuery(this));" required>
            <div class="placeholder__first">Фотография</div>
            <span class="filevalue"></span></div>
          <div class="itemRem" onclick="remItem(0);"><i class="fa fa-close"></i></div>
        </div>
      </div>
      <div class="itemAdd">+</div>
      <div class="manager-broke"></div>
      <label style="font-weight:bold;">Название фабрики</label><br/><br/>
      <label class="text">
        <input type="checkbox" id="selectAll"/> Выбрать все
      </label>
      <hr/>
      <div>


        @if(!empty($fabrics))
          @foreach($fabrics as $fabric)
            <label class="text">
              <input class="text f-check" name="fabrics[]" type="checkbox"
                     value="@php echo $fabric->id @endphp">@php echo stripslashes($fabric->name) @endphp
            </label><br/>
          @endforeach
        @endif

      </div>
      <div class="">
        <br/>
        <label style="font-weight:bold;">Менеджер</label><br/><br/>
        <select name="manager" required style="width:100%;min-height:30px; padding:5px;font-size:16px">
          @if (!empty($managers))
            @foreach($managers as $manager)
              <option value="@php echo $manager->id @endphp">@php echo $manager->name @endphp</option>
            @endforeach
          @endif
        </select>
      </div>

      <br/>
      <input class="submit" id="sendnikita" type="submit" value="Отправить">
    </form>
  </div>

  <script>
    var pdf_index = 1;

    function togglePlaceholder(art) {
      jQuery(art).focusout(function ($) {
        jQuery(art).val() != '' ? jQuery(art).addClass('not-empty') : jQuery(art).removeClass('not-empty');
      });
    }

    function remItem(el) {
      jQuery('#item-' + el).remove();
    }

    function showName(el) {
      el.siblings('.filevalue').text('');
      for (var i = 0; i < el.get(0).files.length; ++i) {
        var name = el.get(0).files.item(i).name;
        el.siblings('.filevalue').append(name);
        i + 1 !== el.get(0).files.length ? el.siblings('.filevalue').append(', ') : '';
      }
    }


    jQuery(document).ready(function ($) {
      $('#selectAll').on('change', function () {
        var checked = $(this).is(':checked');
        console.log(checked);
        $('.f-check').each(function (el) {
          $(this).attr('checked', checked)
        })
      });

      $(".chosen-select").chosen();
      $('.itemAdd').on('click', function () {
        i = pdf_index;

        let field = `<div class="sku__item" id="item-${i}"> <div class="manager__item manager__item-single"> <input type="text" name="data[${i}][style]" onclick="togglePlaceholder(this);" required> <div class="placeholder__first">Какие носки</div></div><div class="manager__item manager__item-single"> <input type="text" name="data[${i}][size]" onclick="togglePlaceholder(this);" required> <div class="placeholder__first">Размеры</div></div><div class="manager__item manager__item-single"> <input type="text" name="data[${i}][qty]" onclick="togglePlaceholder(this);" required> <div class="placeholder__first">Количество</div></div><div class="manager__item manager__item-single"> <input type="text" name="data[${i}][price]" onclick="togglePlaceholder(this);"> <div class="placeholder__first">Проходная цена</div></div><div class="manager__item manager__item-single"> <input type="text" name="data[${i}][term]" onclick="togglePlaceholder(this);" required> <div class="placeholder__first">Срок изготовления</div></div><div class="manager__item manager__item-single"> <input type="text" name="data[${i}][compose]" onclick="togglePlaceholder(this);" required> <div class="placeholder__first">Состав</div></div><div class="manager__item manager__item-single manager__file-wrap"> <input type="file" name="photos_${i}[]" onclick="togglePlaceholder(this);" required class="manager__file" multiple onchange="showName(jQuery(this));"> <div class="placeholder__first">Фотография</div><span class="filevalue"></span> </div><div class="itemRem" onclick="remItem(${i});"><i class="fa fa-close"></i></div></div>
				`;
        $('.manager__sku').append(field);
        console.log(field);
        pdf_index++;
      });
    });

    console.log(jQuery('.manager__file').prop('files'));
    jQuery(document).ready(function ($) {
      sendOptions = {
        target: '#form-send'
      }
      jQuery('#form-send').ajaxForm(sendOptions);
    });
  </script>

@endsection
