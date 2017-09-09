<?php $__env->startSection('content'); ?>


    <form class="form-horizontal form-material" id="loginform" action="<?php echo e(route('register')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <h3 class="box-title m-b-20">Register</h3>

        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <div class="col-xs-12">
                <input class="form-control" name="name" id="name" type="text" value="<?php echo e(old('name')); ?>" required autofocus placeholder="Name">
                <?php if($errors->has('name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <div class="col-xs-12">
                <input class="form-control" name="email" id="email" type="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email">
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <div class="col-xs-12">
                <input id="password" class="form-control" name="password" type="password" required="" placeholder="Password">
                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
            </div>
        </div>


        <div class="form-group text-center m-t-20">
            <div class="col-md-12">
                <button class="btn btn-info btn-small btn-block text-uppercase waves-effect waves-light" type="submit">Register</button>
            </div>
        </div>

        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>Already have an account? <a href="<?php echo e(route('login')); ?>" class="text-primary m-l-5"><b>Login</b></a></p>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>