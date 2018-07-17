<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
  <div class="panel-heading">Members List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">CNIC</th>
          <th scope="col">Department</th>
          <th scope="col">Address</th>
          <th scope="col">Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($mem->memId); ?></td>
          <td><?php echo e($mem->memName); ?></td>
          <td><?php echo e($mem->email); ?></td>
          <td><?php echo e($mem->contact); ?></td>
          <td><?php echo e($mem->cnic); ?></td>
          <td><?php echo e($mem->dept); ?></td>
          <td><?php echo e($mem->address); ?></td>
          <td><?php echo e($mem->memType); ?></td>
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