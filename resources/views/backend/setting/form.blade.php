@include('backend.partial.form.text', [
  'name'  => 'key',
  'label' => 'Key',
  'value' => old('key') ?: (isset($setting) ? $setting->key : ''),
])
@include('backend.partial.form.text', [
  'name'  => 'value',
  'label' => 'Value',
  'value' => old('value') ?: (isset($setting) ? $setting->value : ''),
])
<div class="form-actions">
  <button type="button" class="btn" onclick="history.go(-1)">« Back</button>
  <input type="submit" value="{{ $submitBtnText }}" class="btn btn-success">
</div>