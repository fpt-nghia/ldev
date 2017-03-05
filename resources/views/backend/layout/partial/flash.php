<?php if (Session::has('flash_message')): ?>
  <div class="alert alert-success">
    <button class="close" data-dismiss="alert">×</button>
    <h4 class="alert-heading">Success!</h4>
    <?php echo session('flash_message'); ?>
  </div>
<?php endif; ?>