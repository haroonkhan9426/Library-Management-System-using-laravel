<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Category ID</th>
          <th scope="col">Cateogry Name</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($cat->catId); ?></td>
          <td><?php echo e($cat->catName); ?></td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>
        </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>