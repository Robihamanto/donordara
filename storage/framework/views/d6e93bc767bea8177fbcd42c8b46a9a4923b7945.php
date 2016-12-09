<ul>
    <li><a href="<?php echo e(route('beritauser')); ?>">Berita</a></li>
    <li><a href="#">Data Pendonor <span class="caret"></span></a>
        <div>
            <ul>
                <li><a href="<?php echo e(route('datapendonor')); ?>">Pendonor </a></li>
                <li><a href="<?php echo e(route('stokdarah')); ?>">Stok Darah</a></li>
            </ul>
        </div>
    <li><a href='#'>Welcome! <b style='color:black'><?php echo e(auth()->user()->fullname); ?></b></a>
        <div>
            <ul>
                <li><a href='<?php echo e(route('auth_logout')); ?>'>Logout</a></li>
            </ul>
        </div>
    </li>
</ul>
