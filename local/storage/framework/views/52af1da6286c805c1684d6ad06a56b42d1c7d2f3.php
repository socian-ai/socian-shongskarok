<!DOCTYPE html>
<html lang="en">

<head>


<title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('additionalheader'); ?>
</head>


<body>

<?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('pagecontent'); ?>

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('additionalfooter'); ?>

</body>

</html>