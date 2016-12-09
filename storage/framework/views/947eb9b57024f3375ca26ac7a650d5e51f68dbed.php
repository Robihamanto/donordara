<?php
session_start();
error_reporting(0);
?>
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
                    <nav>
                        <?php echo $__env->yieldContent('menu'); ?>
                    </nav>
                </header>

            <section>
                <article>
                    <?php echo $__env->yieldContent('content'); ?>
                </article>
            </section>

            <div style="clear:both"></div>

            
                
                
            
            </main>
        </div>
    </body>
</html>
