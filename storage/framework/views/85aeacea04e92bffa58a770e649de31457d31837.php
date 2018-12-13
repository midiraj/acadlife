<?php if(auth()->user()->category == 1): ?>


<?php $__env->startSection('title'); ?>
Course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
View Courses
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <ul class="list-group">
        
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a style="margin-bottom: 10px; display: block;" href="/course/<?php echo e($course->id); ?>"><li class="list-group-item"> <?php echo e($course->name); ?> </li></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php else: ?>
<p style="text-align:center;color:red;background-color:white;padding:10px 20px; ">Stop trying to access this page</p>
<?php endif; ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>