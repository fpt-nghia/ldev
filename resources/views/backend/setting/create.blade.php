@extends('backend.layout.main')
@section('content')
<h1>Setting Form Create</h1>
<hr>

<div class="widget-box">
  <div class="widget-title">
    <span class="icon"> <i class="icon-info-sign"></i></span>
    <h5>Form validation</h5>
  </div>
  <div class="widget-content nopadding">
    <form class="form-horizontal" method="POST" action="<?php echo url('backend/setting'); ?>">
      <?php echo csrf_field() ?>
      @include ('backend.setting.form', ['submitBtnText' => 'Create'])
    </form>
  </div>
</div>
@endsection