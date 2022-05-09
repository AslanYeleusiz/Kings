<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>King`s School</title>

    <!-- Fonts -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
</head>

<body>
    <div class="mobileMenu">
        <a href="/" class="mob_nav">
            <div class="mob_active"></div>
            <div class="mob_nav_item m1"></div>
            <div class="mob_footer"></div>
        </a>
        <a href="/books" class="mob_nav">
            <div class="mob_active"></div>
            <div class="mob_nav_item m2"></div>
            <div class="mob_footer"></div>
        </a>
        <a href="/travel" class="mob_nav">
            <div class="mob_active"></div>
            <div class="mob_nav_item m3"></div>
            <div class="mob_footer"></div>
        </a>
        <a href="/authorization" class="mob_nav">
            <div class="mob_active"></div>
            <div class="mob_nav_item m4"></div>
            <div class="mob_footer"></div>
        </a>
    </div>
    <section class="intro">
        <div class="cst_pd">
            <header>
                <a href="/"><img class="logo" src="{{asset('images/logo.svg')}}" alt="Logotype"></a>
                <div class="navList">
                    <a href="/school">
                        <div class="navBlock">School</div>
                    </a>
                    <a href="/books">
                        <div class="navBlock">Books</div>
                    </a>
                    <a href="/travel">
                        <div class="navBlock">Travel</div>
                    </a>
                    <a href="/contact">
                        <div class="navBlock">Conract</div>
                    </a>
                    <a href="/authorization">
                        <div class="navBlock">Войти</div>
                    </a>
                </div>
            </header>
            @yield('main')
        </div>
        <div class="main_footer alignCenter">
            Твои мечты — это законно положенные тебе цели
        </div>
    </section>
    @yield('intro_content')
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
