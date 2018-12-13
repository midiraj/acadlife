

<?php $__env->startSection('title'); ?>
Home Page
<?php $__env->stopSection(); ?>

<?php if(auth()->user()->category == 1): ?>
    <?php $__env->startSection('page-title'); ?>
    Instructor Home
    <?php $__env->stopSection(); ?>
<?php else: ?>
    <?php $__env->startSection('page-title'); ?>
    Student Home
    <?php $__env->stopSection(); ?>
<?php endif; ?>


<?php $__env->startSection('content'); ?>

  <div class="jumbotron text-center jumbotron-fluid">
    <div class="container">
    <h3 class="display-4" style="text-transform:capitalize;">Welcome <strong> <?php echo e(auth()->user()->name); ?> </strong> </h3>
    
    <?php if(auth()->user()->category == 1): ?>
      <a href="/course"><button type="button" class="btn btn-primary">Courses</button></a>
      <a href="/private-mssg"><button type="button" class="btn btn-success">Chat</button></a>
      <a href="/profile"><button type="button" class="btn btn-info">Profile</button></a>
    <?php else: ?>  
     <a href="/private-mssg"><button type="button" class="btn btn-success">Chat</button></a>
     <a href="/profile"><button type="button" class="btn btn-info">Profile</button></a>   
    <?php endif; ?> 
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>