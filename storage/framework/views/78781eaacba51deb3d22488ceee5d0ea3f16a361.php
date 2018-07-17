<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Add</b> New Thesis</h2></div>
                    <form class="form-horizontal" method="POST" action="/addThesis">
                      <?php echo e(csrf_field()); ?>


                        <div class="custom_field form-group ">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('name')); ?>" required autofocus placeholder="Thesis Title">
                          </div>
                          <!--
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <?php echo e($errors->has('name') ? ' has-error' : ''); ?>

                              -->

                        </div>

                        <div class=" custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="mem1Id" type="text" class="form-control" name="mem1Id" value="<?php echo e(old('email')); ?>" required placeholder="First Member ID">
                          </div>
                          <!--
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                          -->
                        </div>
                        <div class=" custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="mem2Id" type="text" class="form-control" name="mem2Id" value="<?php echo e(old('email')); ?>"  placeholder="Second Member ID">
                          </div>
                          <!--
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                          -->
                        </div>

                        <div class=" custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="mem3Id" type="text" class="form-control" name="mem3Id" value="<?php echo e(old('email')); ?>"  placeholder="Third Member ID">
                          </div>
                          <!--
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                          -->
                        </div>


                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-earphone"></i>
                                <input id="supName" type="text" class="form-control" name="supName"  placeholder="Name of Supervisor">
                          </div>
                        </div>
                          <!--
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <?php echo e($errors->has('password') ? ' has-error' : ''); ?>

                              -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Thesis
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>