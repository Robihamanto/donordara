<?php $__env->startSection('content'); ?>

    <article>
        <h1>Semua Data Stok Darah Masuk dan Keluar</h1>
        
            
        
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Gol. Darah</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Date Of Birth</th>
            </tr>
            <?php $no = 1?>
            <tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($d->user->fullname); ?></td>
                    <td align=center><?php echo e($d->user->bloodType->name); ?></td>
                    <td><?php echo e($d->total); ?></td>
                    <td style='text-transform:capitalize'><?php echo e($d->status); ?></td>
                    <td><?php echo e($d->user->dob); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>