@extends('backend.layout.main')
@section('content')
<h1>Setting Form Edit</h1>
<hr>

<div class="widget-box">
  <div class="widget-title">
    <span class="icon"> <i class="icon-info-sign"></i></span>
    <h5>Edit <?php echo $setting->key; ?></h5>
  </div>
  <div class="widget-content nopadding">
    <form class="form-horizontal" method="POST" action="<?php echo url('backend/setting/' . $setting->id); ?>">
      <?php echo method_field('PUT') ?>
      <?php echo csrf_field() ?>
      @include ('backend.setting.form', ['submitBtnText' => 'Edit'])
    </form>
  </div>
</div>
@endsection