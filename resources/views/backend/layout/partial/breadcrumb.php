<div id="breadcrumb">
  <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  <?php if (Request::is('backend/setting*')): ?>
    <a href="<?php echo url('backend/setting'); ?>">Setting</a>
    <?php if (Request::is('backend/setting/create')): ?>
      <a href="#" class="current">Create</a>
    <?php endif; ?>
    <?php if (Request::is('backend/setting/*/edit')): ?>
      <a href="#" class="current">Edit</a>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (Request::is('backend/info')): ?>
    <a href="#" class="current">Info</a>
  <?php endif; ?>

  <?php if (Request::is('backend/config')): ?>
    <a href="#" class="current">Config</a>
  <?php endif; ?>
</div>