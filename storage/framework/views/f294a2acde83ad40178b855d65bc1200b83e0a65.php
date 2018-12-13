

<?php $__env->startSection('title'); ?>
Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Message
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-md-12">
    <div>
        <?php if($message = Session::get('message')): ?>
            <h3 class="text-center text-success"><?php echo e($message); ?></h3>
        <?php endif; ?>
        <h3 class="box-title text-info">Add Service Content</h3>
    </div>
    <br>
    <!-- form start -->
    <form action="<?php echo e(url('/service/new-service-content')); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Recipent</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>

        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Subject</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>

           <!-- <div class="form-group">
                <label for="inputServiceImage" class="col-sm-2 control-label text-info">File</label>
                <div class="col-sm-10">
                    <input type="file" id="inputServiceImage" name="service_image" accept="image/*">
                </div>
            </div>-->

        <div class="form-group">
            <label for="inputServiceDescription" class="col-sm-2 control-label  text-info">Message</label>
            <div class="col-sm-10">
                <textarea name="service_description" id="inputServiceDescription" cols="30" rows="10" style="resize: vertical" placeholder="Start writing......" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <input type="submit" class="btn btn-info btn-block " value="Submit">
            </div>
        </div>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>