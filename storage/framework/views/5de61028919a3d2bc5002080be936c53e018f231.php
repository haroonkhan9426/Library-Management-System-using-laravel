<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>DCSE</b> Library</h2></div>
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="custom_field form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="User Name">
                          </div>
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class=" custom_field form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required placeholder="User e-Mail">
                          </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-list-alt"></i>
                                <input id="registeration" type="text" class="form-control" name="reg_no" required placeholder="Registeration No">
                          </div>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-earphone"></i>
                                <input id="contact_no" type="text" class="form-control" name="contact" required placeholder="Contact">
                          </div>
                        </div>



                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-check"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Re-enter Password">
                          </div>
                        </div>

                        <div class="custom_field form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="User Password">
                          </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-check"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Re-enter Password">
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>