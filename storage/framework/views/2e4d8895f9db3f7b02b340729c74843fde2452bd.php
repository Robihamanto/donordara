<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menuuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>