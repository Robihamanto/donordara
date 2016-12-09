<?php $__env->startSection('content'); ?>
    <article>
        <h1>Tambah Berita</h1>
        <form action='<?php echo e(route('tambahberitaproses')); ?>' method='POST'>
            <?php echo e(csrf_field()); ?>

            <table width=100%>
                <tr>
                    <td><input name='title' type='text' style='width:70%'></td>
                </tr>
                <tr>
                    <td><textarea style='width:100%; height:250px' name='content'></textarea></td>
                </tr>
                <tr>
                    <td><input type='submit' name='tambah' value='Tambahkan'></td>
                </tr>
            </table>
        </form>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>