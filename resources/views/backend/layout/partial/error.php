<?php if ($errors->any()): ?>
  <div class="alert alert-danger" role="alert">
    <a class="close" data-dismiss="alert" href="#">×</a>
    <h4 class="alert-heading">Error!</h4>
    <?php foreach ($errors->all() as $error): ?>
      <div><?php echo $error; ?></div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>