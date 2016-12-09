<ul>
    <li><a href="<?php echo e(route('beranda')); ?>">Beranda</a></li>
    <li><a href="<?php echo e(route('tentangkami')); ?>">Tentang Kami</a></li>
    <li><a href="<?php echo e(route('berita')); ?>">Berita</a></li>

    <?php if ($is_admin != 0){ ?>
    <li><a href="<?php echo e(route('formpendaftaran')); ?>">Form Pendaftaran</a></li>
    <?php } ?>

    <?php if ($is_admin == 0 OR $is_admin == '0'){ ?>
    <li><a href="#">Data Pendonor <span class="caret"></span></a>
        <div>
            <ul>
                <li><a href="index.php?page=pendonor">Pendonor </a></li>
                <li><a href="index.php?page=calonpendonor">Colon Pendonor</a></li>
                <li><a href="index.php?page=stok">Stok Darah</a></li>
            </ul>
        </div>
    </li>

    <?php } ?>
    <li><a href="<?php echo e(route('hubungikami')); ?>">Hubungi Kami</a></li>
    <?php if ($_SESSION[id_user] != '') {
        echo "<li><a href='#'>Welcome! <b style='color:black'>$_SESSION[nama_lengkap]</b></a>
                                    <div>
                                        <ul>
                                            <li><a href='logout.php'>Logout</a></li>
                                        </ul>
                                    </div>
                                  </li>"; ?>
                        <?php } ?>
    <?php if ($is_admin == ''){ ?>

    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
    <?php } ?>
</ul>
