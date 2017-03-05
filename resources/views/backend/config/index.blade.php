@section('head')
@parent

@endsection

@section('bottom')
@parent

@endsection

@extends('backend.layout.main')
@section('content')
<div class="widget-box">
  <div class="widget-title">
    <span class="icon"> <i class="icon-info-sign"></i></span>
    <h5>Form validation</h5>
  </div>
  <div class="widget-content nopadding">
    <form class="form-horizontal" method="POST" action="<?php echo url('backend/config/update'); ?>">
        <?php echo method_field('PUT') ?>
        <?php echo csrf_field() ?>

        <div class="control-group">
          <label class="control-label">Application Debug Mode</label>
          <div class="controls">
            @include('backend.partial.form.radio', [
              'name'  => 'APP_DEBUG',
              'label' => 'enable',
              'value' => 'true',
              'checked' => env('APP_DEBUG') === true ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_DEBUG',
              'label' => 'disable',
              'value' => 'false',
              'checked' => env('APP_DEBUG') === false ? true : false
            ])
            <span class="help-block">If disabled, a simple generic error page is shown on every error that occurs within your application.</span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Log Mode</label>
          <div class="controls">
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG',
              'label' => 'single',
              'value' => 'single',
              'checked' => env('APP_LOG') == 'single' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG',
              'label' => 'daily',
              'value' => 'daily',
              'checked' => env('APP_LOG') == 'daily' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG',
              'label' => 'syslog',
              'value' => 'syslog',
              'checked' => env('APP_LOG') == 'syslog' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG',
              'label' => 'errorlog',
              'value' => 'errorlog',
              'checked' => env('APP_LOG') == 'errorlog' ? true : false
            ])
          </div>
        </div>

        @include('backend.partial.form.number', [
          'name'  => 'APP_LOG_MAX_FILES',
          'label' => 'Maximum Daily Log Files',
          'value' => env('APP_LOG_MAX_FILES'),
          'description' => 'Number days retain of log files (only using to the daily Log Mode)'
        ])

        <div class="control-group">
          <label class="control-label">Logging Level Configuration</label>
          <div class="controls">
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'debug', 'value' => 'debug',
              'checked' => env('APP_LOG_LEVEL') == 'debug' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'info', 'value' => 'info',
              'checked' => env('APP_LOG_LEVEL') == 'info' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'notice', 'value' => 'notice',
              'checked' => env('APP_LOG_LEVEL') == 'notice' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'warning', 'value' => 'warning',
              'checked' => env('APP_LOG_LEVEL') == 'warning' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'error', 'value' => 'error',
              'checked' => env('APP_LOG_LEVEL') == 'error' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'critical', 'value' => 'critical',
              'checked' => env('APP_LOG_LEVEL') == 'critical' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'alert', 'value' => 'alert',
              'checked' => env('APP_LOG_LEVEL') == 'alert' ? true : false
            ])
            @include('backend.partial.form.radio', [
              'name'  => 'APP_LOG_LEVEL', 'label' => 'emergency', 'value' => 'emergency',
              'checked' => env('APP_LOG_LEVEL') == 'emergency' ? true : false
            ])
            <span class="help-block">System will log all levels greater than or equal to the specified severity</span>
          </div>
        </div>

        @include('backend.partial.form.text', [
          'name'  => 'MAIL_HOST',
          'label' => 'SMTP Host Address',
          'value' => env('MAIL_HOST'),
        ])
        @include('backend.partial.form.text', [
          'name'  => 'MAIL_PORT',
          'label' => 'SMTP Host Port',
          'value' => env('MAIL_PORT'),
        ])
        @include('backend.partial.form.text', [
          'name'  => 'MAIL_ENCRYPTION',
          'label' => 'E-Mail Encryption Protocol',
          'value' => env('MAIL_ENCRYPTION'),
        ])
        @include('backend.partial.form.email', [
          'name'  => 'MAIL_USERNAME',
          'label' => 'SMTP Server Username',
          'value' => env('MAIL_USERNAME'),
        ])
        @include('backend.partial.form.password', [
          'name'  => 'MAIL_PASSWORD',
          'label' => 'SMTP Server Password',
          'value' => '',
        ])

        <div class="form-actions">
          <button type="button" class="btn" onclick="history.go(-1)">« Back</button>
          <input type="submit" value="Send " class="btn btn-success">
        </div>
    </form>
  </div>
</div>
@endsection