<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <article>
            <h1><?php echo e($d->title); ?></h1>
            <i><?php echo e($d->updated_at); ?></i>
            <b>Oleh Administrator</b>
            <p><?php echo nl2br($d->content); ?></p>
            <?php $__currentLoopData = $d->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <b>Oleh <?php echo e($c->user->fullname); ?></b>
                <br>
                <?php echo e($c->comment); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            <?php
            if (auth()->user()->status == 'aktif'){
            ?>
            <div class="komen">
                <form action="<?php echo e(route('submitkomentar')); ?>" method="POST" accept-charset="utf-8">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="information_id" value="<?php echo e($d->id); ?>">
                    <textarea name="komentar"
                              style='border-radius: 5px;margin-top: 10px;margin-bottom: 10px;width: 625px'></textarea>
                    <input class="float-right" type="submit" name="submitkomentar" value="Komentar">
                </form>
            </div>
            <?php
            }
            ?>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>