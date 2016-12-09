<?php $__env->startSection('content'); ?>
    <article>
        <h1>Form Login Members</h1>
        <form  action='<?php echo e(route('auth_login')); ?>' method='POST'>
            <center><table style='width:299px; margin:10% 0 10% 0; background:#e3e3e3; padding:30px; border:1px solid #cecece'>
                    <?php echo e(csrf_field()); ?>

                    <tr>
                        <td>Username</td> <td> <input type='text' name='username'></td>
                    </tr>
                    <tr>
                        <td>Password</td> <td> <input type='password' name='password'></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input style='float:right' type='submit' value='Login' name='login'></td>
                    </tr>
                </table></center>
        </form>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>