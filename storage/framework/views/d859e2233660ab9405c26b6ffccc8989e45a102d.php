<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Add</b> excel file</h2></div>
                    <form class="form-horizontal" method="POST" action="/importgetfile">
                    <?php echo e(csrf_field()); ?>

                    <button type="submit" class="btn btn-primary">
                        get format
                    </button>
                    </form>
                    <form class="form-horizontal" method="POST" action="/importDBfile" enctype="multipart/form-data">
                      <?php echo e(csrf_field()); ?>


                        <div class="custom_field form-group ">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input type="file" name="importfile" >
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    import file
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