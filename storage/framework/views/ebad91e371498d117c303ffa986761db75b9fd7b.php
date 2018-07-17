<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
  <form class="row" method="post" action="/addCategories">
    <?php echo e(csrf_field()); ?>

    <div class="col-xs-8 inner-addon left-addon form-group">
      <input type="text" name="catName" class="form-control" placeholder="Name of Category">
    </div>
    <div class="col-xs-4">
      <button type="submit" name="button" class="btn btn-primary">Add Category</button>
    </div>

  </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>