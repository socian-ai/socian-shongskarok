<?php $__env->startSection('content'); ?>
    <form class="form-horizontal form-material" id="loginform" action="<?php echo e(route('login')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <h3 class="box-title m-b-20">Sign In</h3>
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
                <div class="checkbox checkbox-success">
                    <input id="checkbox1" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label for="checkbox1"> Remember me </label>
                </div>
            </div>
        </div>

        <div class="form-group text-center m-t-20">
            <div class="col-md-12">
                <button class="btn btn-info btn-small btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>

            </div>
        </div>

        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                        Forgot Your Password?
                    </a>
                </p>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>