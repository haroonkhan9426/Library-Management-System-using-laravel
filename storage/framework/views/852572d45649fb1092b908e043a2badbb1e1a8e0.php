<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>DCSE</b> Library</h2></div>
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="custom_field form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="User e-Mail" required autofocus>
                            </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>


                        <div class="custom_field form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <div class="inner-addon right-addon">
                              <i class="glyphicon glyphicon-lock"></i>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                            </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                        <div>
                          <button type="submit" class="btn btn-primary btn-block">
                              Login
                          </button>
                        </div>
                        <div class="form-group">
                          <div class="row custom_field text-center" style="margin-right: 15px;">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                              </div>
                                <div class="col-md-6">
                                  <a class="btn btn-link " href="<?php echo e(route('password.request')); ?>">
                                      Forgot Your Password?
                                  </a>
                                </div>
                            </div>
                          </div>
                        <div class="form-group">
                            <div class="text-center">
                              Not a member yet?
                                <a class="btn btn-link " href="<?php echo e(route('password.request')); ?>">
                                    Sign Up
                                </a>
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