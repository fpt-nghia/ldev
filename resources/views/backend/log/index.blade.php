@section('head')
@parent

@endsection

@section('bottom')
@parent
  <script>
  $(document).ready(function(){
    $('.table').on('click', '.expand', function(){
      $('#' + $(this).data('display')).toggle();
    });
  });
</script>
@endsection

@extends('backend.layout.main')
@section('content')
  <div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th>Level</th>
        <th>Context</th>
        <th>Date</th>
        <th>Content</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($logs as $key => $log): ?>
    <tr>
      <td class="text-center text-<?php echo $log['classLevel'] ?>">
        <span class="glyphicon glyphicon-<?php echo $log['imgLevel'] ?>" aria-hidden="true"></span> <?php echo $log['level'] ?>
      </td>
      <td><?php echo $log['context'] ?></td>
      <td><?php echo $log['date'] ?></td>
      <td>
        <?php if($log['stack']): ?>
          <a class="pull-right expand btn btn-default btn-xs" data-display="stack<?php echo $key ?>">
            <span class="glyphicon glyphicon-search"></span>
          </a>
        <?php endif; ?>
        <?php echo $log['text'] ?>

        <?php if(isset($log['inFile'])): ?>
          <br /><?php echo $log['inFile'] ?>
        <?php endif; ?>

        <?php if($log['stack']): ?>
          <div class="stack" id="stack<?php echo $key ?>" style="display: none; white-space: pre-wrap;"><?php echo trim($log['stack']) ?></div>
        <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
  </div>

  <div>
    <a href="?dl=<?php echo base64_encode($currentFile) ?>">
      <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Download file
    </a> -
    <a class="jsDel" href="?del=<?php echo base64_encode($currentFile) ?>">
      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete file
    </a>
  </div>

  <i class="icon icon-list"></i> <span>Log</span>
  <ul>
    <?php foreach($files as $file): ?>
      <li><a href="?l=<?php echo base64_encode($file) ?>" class="list-group-item<?php if($currentFile == $file): ?> active <?php endif; ?>">
        <?php echo $file ?>
      </a></li>
    <?php endforeach; ?>
  </ul>
</li>

@endsection