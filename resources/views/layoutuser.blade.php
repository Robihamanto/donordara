<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Donor Darah</title>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}"> <!-- html 5 -->
</head>

<body>
<main id="page">
    <header id="header">
        <img src="{{ url('images/header.jpg')}}">
        <nav>
            @include('menuuser')
        </nav>
    </header>
    <section>
        <article>
            @yield('content')
        </article>
    </section>
    <div style="clear:both"></div>

    <footer>
        <!-- <hr> -->
        {{--<p>Copyright 2016 - Donor Darah FILKOM</p>--}}

    </footer>
</main>
</div>
</body>
</html>