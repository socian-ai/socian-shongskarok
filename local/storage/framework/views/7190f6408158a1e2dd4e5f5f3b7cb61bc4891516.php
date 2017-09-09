<?php $__env->startSection('additionalheader'); ?>
    <link href="<?php echo e(URL::to('plugins/bower_components/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::to('plugins/bower_components/datatables/buttons.dataTables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
        UGC Dashboard
<?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagecontent'); ?>
            <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">

            </div>


            <!--row -->

        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> &copy; 2016 - <?= date("Y"); ?> by <a href="http://www.ugc.gov.bd">University Grants Comission of Bangladesh</a> <br> Developed by <a href="http://technolive.co">Technolive</a></footer>
    </div>
    <!-- /#page-wrapper -->
    </div>

    </div>

    <!-- /#wrapper -->
    <!-- jQuery -->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('additionalfooter'); ?>

    <script src="<?php echo e(URL::to('plugins/bower_components/raphael/raphael-min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/morrisjs/morris.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/jquery.dataTables.min.js')); ?>"></script>


    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('plugins/bower_components/datatables/buttons.print.min.js')); ?>"></script>

    <script>
        $('#example23').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>