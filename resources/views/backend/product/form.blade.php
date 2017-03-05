@include('backend.partial.form.text', [
  'name'  => 'name',
  'label' => '名前',
  'value' => old('name') ?: (isset($product) ? $product->name : ''),
])
@include('backend.partial.form.text', [
  'name'  => 'price',
  'label' => '価格',
  'value' => old('price') ?: (isset($product) ? $product->price : ''),
])

<div class="control-group">
  <label class="control-label">Image</label>
  <div class="controls">
	<input type="file" name="image">
  </div>
</div>


<div class="form-actions">
  <button type="button" class="btn" onclick="history.go(-1)">« Back</button>
  <input type="submit" value="{{ $submitBtnText }}" class="btn btn-success">
</div>