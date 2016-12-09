<?php $__env->startSection('content'); ?>
        <h1>Hubungi Kami</h1>
        <p>Hubungi kami secara online melalui form dibawah ini </p>
        <form action='' method='POST'>
            <table width="100%">
                <tr>
                    <td width=120px>Nama Lengkap</td>
                    <td><input type='text' name='a' required></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td><input type='email' name='b' required></td>
                </tr>
                <tr>
                    <td>Isi Pesan</td>
                    <td><textarea style='width:100%; height:80px' name='c' required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name='submit' value='Kirimkan Pesan'></td>
                </tr>
            </table>
        </form>
    <br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>