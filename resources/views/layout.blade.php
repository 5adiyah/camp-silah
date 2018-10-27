<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CAMP SILAH</title>

</head>
<body>
    <div class="background-grid">
        <div class="grid-item col1"><p>1</p></div>
        <div class="grid-item col1"><p>2</p></div>
        <div class="grid-item col1"><p>3</p></div>
        <div class="grid-item col1"><p>4</p></div>
        <div class="grid-item col1"><p>5</p></div>
        <div class="grid-item col1"><p>6</p></div>
        <div class="grid-item col1"><p>7</p></div>
        <div class="grid-item col1"><p>8</p></div>
        <div class="grid-item col1"><p>9</p></div>
        <div class="grid-item col1"><p>10</p></div>
        <div class="grid-item col1"><p>11</p></div>
        <div class="grid-item col1"><p>12</p></div>
    </div>

    <div class="nav">
        <div class="site-logo"><img src="{{ asset('images/mobile-logo.png') }}" alt="Camp Silah Logo"></div>
        <div class="site-name"><img src="{{ asset('images/mobile-site-name.png') }}" alt="Camp Silah"></div>
        <div class="site-details">
            <p>CAMP MAGRUDER</p>
            <img src="{{ asset('images/nav-divider.png') }}" alt="Nav Divider">
            <p>JUNE 28 - JULY 1</p>
            <img src="{{ asset('images/nav-divider.png') }}" alt="Nav Divider">
            <p>$150/CHILD</p>
        </div>
        <div class="menu grid">
            <div class="menu-item bg-red"><p>CAMP</p></div>
            <div class="menu-item bg-green"><p>GUEST SPEAKER</p></div>
            <div class="menu-item bg-yellow"><p>COUNSELORS</p></div>
            </div>
        </div>
    </div>

    <div class="container grid ">
        @yield('content')
    </div>

    <div class="footer">
        <div class="footer-logo">
            <img src="{{ asset('images/mobile-logo.png') }}" >
        </div>

        <div class="footer-site-name">
            <img src="{{ asset('images/mobile-site-name.png') }}" >
        </div>

        <div class="footer-menu">
            <ul>
                <li><a href="#">SCHEDULE</a></li>
                <li><a href="#">COUNSELORS</a></li>
                <li><a href="#">PACKING LIST</a></li>
                <li><a href="#">REGISTRATION</a></li>
            </ul>
        </div>

        <div class="sign-up">
            <input type="text" placeholder="Sign up for more info">
            <button>SIGN UP</button>
        </div>
    </div>


</body>
</html>
