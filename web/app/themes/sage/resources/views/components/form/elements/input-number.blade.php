<div class="number">
    <span class="number__counter number__counter_minus"
          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">&minus;</span>

    <input class="input input_number" type="number" value="{{ $value or '1' }}" min="{{ $min or '1' }}"
           max="{{ $max or '100' }}" step="{{ $step or '1' }}" name="{{ $name or '' }}">

    <span class="number__counter number__counter_plus"
          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">&plus;</span>
</div>