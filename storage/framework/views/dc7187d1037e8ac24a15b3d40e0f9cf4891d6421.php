    <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Selamat datang di web donor darah</title>
    <link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>"> <!-- html 5 -->
</head>

<body>
<main id="page">
    <header id="header">
        <img src="<?php echo e(url('images/header.jpg')); ?>">
    </header>

    <section>
        <article>
            <?php echo $__env->yieldContent('content'); ?>
        </article>
    </section>

    <aside>
        <?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </aside>

    <div style="clear:both"></div>

    <footer>
        <!-- <hr> -->
        

    </footer>
</main>
</div>
</body>
</html>