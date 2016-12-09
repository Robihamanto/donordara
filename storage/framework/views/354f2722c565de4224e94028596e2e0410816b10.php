<?php $__env->startSection('content'); ?>
    <article>
        <h1>Tambah Berita</h1>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <form action='<?php echo e(route('editberitaproses')); ?>' method='POST'>
            <?php echo e(csrf_field()); ?>

            <table width=100%>
                <tr>
                        <td><input  value="<?php echo e($d->title); ?>" name='title' type='text' style='width:70%'></td>
                </tr>
                <tr>
                    <td><textarea name='content' type="'text" style='width:100%; height:250px' ><?php echo e($d->content); ?></textarea></td>
                </tr>
                <tr>
                    <td><input type='submit' name='tambah' value='Tambahkan'></td>
                </tr>
            </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </form>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>