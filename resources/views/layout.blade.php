<?php
session_start();
error_reporting(0);
?>
<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Selamat datang di web donor darah</title>
            <link rel="stylesheet" href="{{ url('assets/css/style.css') }}"> <!-- html 5 -->
        </head>

        <body>
            <main id="page">
                <header id="header">
                    <img src="{{ url('images/header.jpg')}}">
                    <nav>
                        @yield('menu')
                    </nav>
                </header>

            <section>
                <article>
                    @yield('content')
                </article>
            </section>

            <div style="clear:both"></div>

            {{--<footer>--}}
                {{--<!-- <hr> -->--}}
                {{--<p>Copyright 2016 - Donor Darah FILKOM</p>--}}
            {{--</footer>--}}
            </main>
        </div>
    </body>
</html>
