<?php $__env->startSection('content'); ?>
    <article>
        <h1>Edit Data Pendonor</h1>
        <p>Silahkan edit data pendonor : </p>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <form action='<?php echo e(route('editdatapendonorproses', ['id' => $d->id])); ?>' method='POST'>
                <table width="100%">
                    <?php echo e(csrf_field()); ?>

                    <tr>
                        <td>Username</td>
                        <td><input value="<?php echo e($d->username); ?>" type='text' name='user' readonly required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input value="<?php echo e($d->password); ?>" type='password' name='pass' readonly required></td>
                    </tr>
                    <tr>
                        <td width=120px>Nama Lengkap</td>
                        <td><input value="<?php echo e($d->fullname); ?>" type='text' name='fullname' style='width:55%' required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input value="<?php echo e($d->pob); ?>" type='text' name='pob' style='width:65%' required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input value="<?php echo e($d->dob); ?>" type='date' name='dob' required></td>
                    </tr>
                    <tr>
                        <td>No Telpon</td>
                        <td><input value="<?php echo e($d->phonenumber); ?>" type='text' name='phonenumber' required></td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td><input value="<?php echo e($d->address); ?>" type='text' name='address' style='width:100%; height:40px'
                                   required></td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td><input value="<?php echo e($d->weight); ?>" type='number' name='weight' required></td>
                    </tr>
                    <tr>
                        <td>Riwayat Penyakit</td>
                        <td><input style='width:100%; height:80px' value="<?php echo e($d->disease_history); ?>" type='text'
                                   name='disease_history' required></td>
                    </tr>
                    <tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <td><input type="submit" name='submit' value='Update'></td>
                    </tr>
                </table>
            </form>
    </article>
    <br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>