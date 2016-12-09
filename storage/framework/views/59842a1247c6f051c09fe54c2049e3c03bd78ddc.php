<?php $__env->startSection('content'); ?>
    <article>
        <h1>Semua Data Pendonor (Telah Disetujui)</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Berat</th>
                <th>Tanggal Lahir</th>
                <th>Gol. Darah</th>
            </tr>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($d->fullname); ?></td>
                    <td><?php echo e($d->weight); ?> Kg</td>
                    <td><?php echo e($d->dob); ?></td>
                    <td align=center><?php echo e($d->bloodtype->name); ?></td>
                </tr>
                }
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
    </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>