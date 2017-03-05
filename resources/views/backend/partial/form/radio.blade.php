<label>
  <input type="radio" name="{{ $name }}" value="{{ $value }}" @if(true === $checked) checked @endif />
  {{ $label }}
</label>