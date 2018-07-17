<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
  <div class="panel-heading">Bthesis List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">thesisID</th>
          <th scope="col">Title</th>
          <th scope="col">mem1id</th>
          <th scope="col">mem2id</th>
          <th scope="col">mem3id</th>
          <th scope="col">supvisor</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
    <tbody>
    <?php $__currentLoopData = $thesis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($thi->thesisId); ?></td>
      <td><?php echo e($thi->thesisTitle); ?></td>
      <td><?php echo e($thi->mem1Id); ?></td>
      <td><?php echo e($thi->mem2Id); ?></td>
      <td><?php echo e($thi->mem3Id); ?></td>
      <td><?php echo e($thi->supName); ?></td>
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