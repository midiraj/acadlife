<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('/files/')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo e(asset('/files/')); ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('/files/')); ?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href=".<?php echo e(asset('/files/')); ?>/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('/files/')); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">
        <?php echo $__env->make('includes.top-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('includes.side-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $__env->yieldContent('page-title'); ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
            <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('/files/')); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('/files/')); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo e(asset('/files/')); ?>./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo e(asset('/files/')); ?>/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo e(asset('/files/')); ?>/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo e(asset('/files/')); ?>/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo e(asset('/files/')); ?>/dist/js/sb-admin-2.js"></script>

</body>

</html>