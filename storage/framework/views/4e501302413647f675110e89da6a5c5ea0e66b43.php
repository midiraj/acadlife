<?php if(auth()->user()->category == 1): ?>


<?php $__env->startSection('title'); ?>
Course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Course page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <ul class="list-group">
        
     <li class="list-group-item"><strong>Course Name: </strong> <?php echo e($course->name); ?> </li>
     <li class="list-group-item"><strong>Course Code: </strong> <?php echo e($course->course_code); ?> </li>
     <li class="list-group-item"><strong>Semester Code: </strong> <?php echo e($course->semester_code); ?> </li>
    <li style="list-style:none;text-align:right;margin:10px 0;">
        <form style="display: inline;" method="POST" action="<?php echo e(action('coursesController@destroy',$course->id)); ?>" onsubmit="return confirm('are you sure?')">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" class="btn btn-danger">Delete Course</button>
        </form>
    </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php else: ?>
<p style="text-align:center;color:red;background-color:white;padding:10px 20px; ">Stop trying to access this page</p>
<?php endif; ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>