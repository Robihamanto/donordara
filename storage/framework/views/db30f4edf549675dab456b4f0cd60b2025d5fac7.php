<?php $__env->startSection('content'); ?>
    <article>
        <h1>Update Stok</h1>
        <form action='<?php echo e(route('updatestokproses')); ?>' method='POST'>
            <?php echo e(csrf_field()); ?>

            <table width=100%>
                <tr>
                    <td>Pendonor</td>
                    <td><select name='id'>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($d->id); ?>"><?php echo e($d->fullname); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input name='total' type='number' style='width:70%'> Liter</td>
                </tr>
                <tr>
                    <td>Pendonor</td>
                    <td><select name='status'>
                            <option value="masuk">Masuk</option>
                            <option value="keluar">Keluar</option>
                        </select></td>
                </tr>
                <tr>
                    <td><input type='submit' name='tambah' value='Tambahkan'></td>
                </tr>
            </table>
        </form>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>