<div class="control-group">
  <label class="control-label">{{ $label }}</label>
  <div class="controls">
    <input type="password" name="{{ $name }}" value="{{ $value }}" >
    <?php if (isset($description)): ?>
      <span class="help-block">{{ $description }}</span>
    <?php endif; ?>
  </div>
</div>