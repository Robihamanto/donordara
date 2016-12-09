<?php $__env->startSection('content'); ?>
    <h1>Selamat datang di web donor darah</h1>
       <img src="<?php echo e(url('images/donor.jpg')); ?>" width="50%" style="float:left; margin-right:10px">Donor darah adalah proses
        pengambilan darah dari seseorang secara sukarela untuk disimpan di bank darah untuk kemudian digunakan pada
        transfusi darah.
        <br>
        Untuk menekankan pentingnya persediaan darah hasil sumbangan, Palang Merah Australia menyampaikan bahwa "80%
        orang Australia akan membutuhkan transfusi darah suatu saat pada hidup mereka, namun hanya 3% yang menyumbang
        darah setiap tahun". Menurut palang merah di Amerika Serikat, 97% orang kenal orang lain yang pernah membutuhkan
        transfusi darah. Dan menurut survei di Kanada, 52% orang Kanada pernah mendapatkan transfusi darah atau kenal
        orang yang pernah.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>