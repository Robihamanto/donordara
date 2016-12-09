<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Donor Darah</title>
    <link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>"> <!-- html 5 -->
</head>

<body>
<main id="page">
    <header id="header">
        <img src="<?php echo e(url('images/header.jpg')); ?>">
        <nav>
            <?php echo $__env->make('menuuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </nav>
    </header>
    <section>
        <article>
            <?php echo $__env->yieldContent('content'); ?>
        </article>
    </section>
    <div style="clear:both"></div>

    <footer>
        <!-- <hr> -->
        

    </footer>
</main>
</div>
</body>
</html>