<?php $__env->startSection('content'); ?>
<div class="row">
  <form class="" action="/returnBooks" method="post">
    <?php echo e(csrf_field()); ?>

  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">First Portion</div>
      <div class="panel-body">
        <div class="form-group">
          <label for="memberId">Member ID</label>
          <input type="text" class="form-control"name="memberId" value="" id="memberId" placeholder="Member ID">
        </div>
        <div class="form-group">
          <label for="bookId">Book ID</label>
          <input type="text" class="form-control"name="bookId" value="" id="bookId" placeholder="Book ID">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">Second Portion</div>
      <div class="panel-body">
        <div class="form-group">
          <label for="returnDate">Return Date</label>
        <input type="date" name="returnDate" class="form-control" id="returnDate">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="button">Return Books</button>
        </div>
    </div>
  </div>
  </form>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>