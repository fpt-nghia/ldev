@extends('backend.layout.main')
@section('content')
<h1>Setting List</h1>
<hr>

<div class="widget-box">
  <div class="widget-title">
    <span class="icon"><i class="icon-bookmark"></i></span>
    <h5>All Action</h5>
  </div>
  <div class="widget-content">
    <a href="<?php echo url('backend/setting/create') ?>" class="btn btn-primary">Create</a>
  </div>
</div>

<?php if ($settings): ?>
<form class="form-horizontal" method="POST" action="<?php echo url('backend/setting/destroys'); ?>">
<?php echo method_field('DELETE') ?>
<?php echo csrf_field() ?>
<p class="text-right">
  Showing {{ $settings->currentPage() }} to {{ $settings->lastPage() }} of {{ $settings->total() }} entries
</p>
<div class="widget-box">
  <div class="widget-title">
    <span class="icon"><i class="icon-th"></i></span>
    <h5>Setting table</h5>
    <span class="label label-info">
      Action <button type="submit" class="btn btn-danger btn-mini cDeleteConfirm">Delete</button>
    </span>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-striped table-checkbox">
      <thead>
        <tr>
          <th><input type="checkbox" class="cSelectAllCheckbox" /></th>
          @include('backend.partial.tablesort', ['orderBy' => 'id', 'label' => 'ID'])
          @include('backend.partial.tablesort', ['orderBy' => 'key', 'label' => 'Key'])
          @include('backend.partial.tablesort', ['orderBy' => 'value', 'label' => 'Value'])
          @include('backend.partial.tablesort', ['orderBy' => 'type', 'label' => 'Type'])
          @include('backend.partial.tablesort', ['orderBy' => 'created_at', 'label' => 'Created'])
          @include('backend.partial.tablesort', ['orderBy' => 'updated_at', 'label' => 'Updated'])
          <th>Edit</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
          <th>Id</th>
          <th>Key</th>
          <th>Value</th>
          <th>Type</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Edit</th>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach ($settings as $setting): ?>
        <tr>
          <td><input type="checkbox" name="ids[]" value="<?php echo $setting->id; ?>"
              <?php /* if(settingTypeIsReadonly($setting->type)): ?> disabled readonly<?php endif; */ ?>
              />
          </td>
          <td><?php echo $setting->id; ?></td>
          <td><?php echo $setting->key; ?></td>
          <td><?php echo $setting->value; ?></td>
          <td><?php echo settingTypeLabel($setting->type); ?></td>
          <td><?php echo $setting->created_at; ?></td>
          <td><?php echo $setting->updated_at; ?></td>
          <td><a href="<?php echo url('backend/setting/' . $setting->id . '/edit') ?>" class="btn btn-primary btn-mini">Edit</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="text-center"><div class="pagination">{!! $settings->appends(request()->except('page'))->links() !!}</div></div>
  </div>
</div>
 </form>
<?php else: ?>
  <div class="text-center"><?php echo cache('setting')['noRecord']; ?></div>
<?php endif; ?>
@endsection