<?php if(auth()->user()->category == 1): ?>


<?php $__env->startSection('title'); ?>
Course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Add Course
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- form start -->
 <form action="<?php echo e(action('coursesController@store')); ?>" method="POST" class="form-horizontal">
        <?php echo e(csrf_field()); ?>



        <div class="form-group">
            <label for="inputServiceTitle1" class="col-sm-2 control-label text-info">Course Name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle1" name="name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputServiceTitle2" class="col-sm-2 control-label text-info">Course Code</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle2" name="course_code">
            </div>
        </div>
        <div class="form-group">
            <label for="inputServiceTitle3" class="col-sm-2 control-label text-info">Semester Code</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle3" name="semester_code">
            </div>
        </div>
      
            


           <!-- <div class="form-group">
                <label for="inputServiceImage" class="col-sm-2 control-label text-info">File</label>
                <div class="col-sm-10">
                    <input type="file" id="inputServiceImage" name="service_image" accept="image/*">
                </div>
            </div>-->

        
        
        <div class="form-group">
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-info btn-block " value="ADD">
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php else: ?>
<p style="text-align:center;color:red;background-color:white;padding:10px 20px; ">Stop trying to access this page</p>
<?php endif; ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>