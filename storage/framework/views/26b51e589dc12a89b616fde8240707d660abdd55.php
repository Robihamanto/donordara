<?php $__env->startSection('content'); ?>

	<article>
		<h1>Kelola Tentang Kami</h1>
		<form action='index.php?page=aksihalaman' method='POST'>
			<table width=100%>
				<input type='hidden' name='id' value='$r[id_halaman]'>
				<tr><td><input name='a' type='text' style='width:70%' value='$r[judul]'></td></tr>
				<tr><td><textarea style='width:100%; height:250px' name='b'>$r[isi]</textarea></td></tr>
				<tr><td><input type='submit' value='Update Data'></td></tr>
			</table>
		</form>
	</article>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>