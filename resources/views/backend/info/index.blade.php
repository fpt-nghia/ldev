@section('head')
@parent

@endsection

@section('bottom')
@parent

@endsection

@extends('backend.layout.main')
@section('content')
<div class="row-fluid">
  <div class="span4">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
        <h5>Info general</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Key</th>
              <th>Info</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PHP version</td>
              <td><?php echo PHP_VERSION; ?></td>
            </tr><tr>
              <td>Include_path</td>
              <td><?php echo DEFAULT_INCLUDE_PATH; ?></td>
            </tr><tr>
              <td>Extension dir</td>
              <td><?php echo PHP_EXTENSION_DIR; ?></td>
            </tr><tr>
              <td>HTTP_USER_AGENT</td>
              <td><?php echo getenv('HTTP_USER_AGENT') ?></td>
            </tr><tr>
              <td>SERVER_SOFTWARE</td>
              <td><?php echo getenv('SERVER_SOFTWARE') ?></td>
            </tr><tr>
              <td>DOCUMENT_ROOT</td>
              <td><?php echo getenv('DOCUMENT_ROOT') ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="span4">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-arrow-right"></i> </span>
        <h5>Info App</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Key</th>
              <th>Info</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>APP_ENV</td>
              <td><?php echo getenv('APP_ENV') ?></td>
            </tr><tr>
              <td>APP_DEBUG</td>
              <td><?php echo getenv('APP_DEBUG') ?></td>
            </tr><tr>
              <td>APP_LOG</td>
              <td><?php echo getenv('APP_LOG') ?></td>
            </tr><tr>
              <td>APP_LOG_LEVEL</td>
              <td><?php echo getenv('APP_LOG_LEVEL') ?></td>
            </tr><tr>
              <td>APP_LOG_MAX_FILES</td>
              <td><?php echo getenv('APP_LOG_MAX_FILES') ?></td>
            </tr><tr>
              <td>CACHE_DRIVER</td>
              <td><?php echo getenv('CACHE_DRIVER') ?></td>
            </tr><tr>
              <td>SESSION_DRIVER</td>
              <td><?php echo getenv('SESSION_DRIVER') ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="span4">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
        <h5>Info Database</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Key</th>
              <th>Info</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>DB_CONNECTION</td>
              <td><?php echo getenv('DB_CONNECTION') ?></td>
            </tr><tr>
              <td>DB_HOST</td>
              <td><?php echo getenv('DB_HOST') ?></td>
            </tr><tr>
              <td>DB_PORT</td>
              <td><?php echo getenv('DB_PORT') ?></td>
            </tr><tr>
              <td>DB_DATABASE</td>
              <td><?php echo getenv('DB_DATABASE') ?></td>
            </tr><tr>
              <td>DB_USERNAME</td>
              <td><?php echo getenv('DB_USERNAME') ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
        <h5>Loaded Extensions</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Module</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($loadedExtensions as $extension): ?>
            <tr>
              <td><?php echo $extension; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection