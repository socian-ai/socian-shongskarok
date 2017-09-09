<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo e(URL::to('plugins/images/favicon.png')); ?>" rel="icon" type="image/png" sizes="16x16">

    <title>Login - UGC</title>


    <link href="<?php echo e(URL::to('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::to('css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::to('css/style.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(URL::to('css/colors/blue.css')); ?>" id="theme" rel="stylesheet">

    <script src="<?php echo e(URL::to('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(URL::to('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')); ?>"></script>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="<?php echo e(route('login')); ?>" method="post">
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="phone" type="text" required="" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" required="" placeholder="Password">
                    </div>
                </div>

                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">

                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="http://eliteadmin.themedesigner.in/demos/eliteadmin/index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="<?php echo e(URL::to('plugins/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(URL::to('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/waves.js')); ?>"></script>

<script src="<?php echo e(URL::to('js/custom.min.js')); ?>"></script>

<script src="<?php echo e(URL::to('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')); ?>"></script>

</body>

</html>
