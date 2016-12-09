<?php $__env->startSection('content'); ?>

    <article>
        <h1>Semua Daftar Informasi/Berita</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Judul Info</th>
                <th>tanggal</th>
                <th></th>
            </tr>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td valign=top><?php echo e($no++); ?></td>
                    <td valign=top><?php echo e($r->title); ?></td>
                    <td width='140px'><?php echo e(substr($r->updated_at, 0, 10)); ?></td>
                    <td valign=top><a href='<?php echo e(route('editberita', ['id' => $r->id])); ?>'>Edit |</a><a
                                href='<?php echo e(route('delete-berita', ['id' => $r->id])); ?>'> Delete</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
        <a href='<?php echo e(route('tambahberita')); ?>'>Tambah Berita</a>
    </article>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>