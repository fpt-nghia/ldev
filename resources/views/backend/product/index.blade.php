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
    <a href="<?php echo url('backend/product/create') ?>" class="btn btn-primary">Create</a>
  </div>
</div>

<?php if ($products): ?>
<form class="form-horizontal" method="POST" action="<?php echo url('backend/product/destroys'); ?>">
<?php echo method_field('DELETE') ?>
<?php echo csrf_field() ?>
<p class="text-right">
  Showing {{ $products->currentPage() }} to {{ $products->lastPage() }} of {{ $products->total() }} entries
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
		　　<th>Id</th>
		　　<th>Name</th>
		　　<th>価格</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
		　　<th>Id</th>
		　　<th>Name</th>
		　　<th>価格</th>
          <th>Edit</th>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
          <td><input type="checkbox" name="ids[]" value="<?php echo $product->id; ?>" />
          </td>
          <td><?php echo $product->id; ?></td>
          <td><?php echo $product->name; ?></td>
          <td><?php echo $product->price; ?></td>
          <td><a href="<?php echo url('backend/product/' . $product->id . '/edit') ?>" class="btn btn-primary btn-mini">Edit</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="text-center"><div class="pagination">{!! $products->appends(request()->except('page'))->links() !!}</div></div>
  </div>
</div>
 </form>
<?php else: ?>
  <div class="text-center"><?php echo cache('product')['noRecord']; ?></div>
<?php endif; ?>
@endsection