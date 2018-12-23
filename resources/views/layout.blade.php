<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CAMP SILAH</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>

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

    <div class="nav col12">
        <div class="menuToggle"></div>
        <div class="cross">&#735;</div>
        <div class="site-logo"><a href="/"><img src="{{ asset('images/mobile-logo.png') }}" alt="Camp Silah Logo"></a></div>
        <div class="site-name"><a href="/"><img src="{{ asset('images/mobile-site-name.png') }}" alt="Camp Silah"></a></div>
        <div class="site-details">
            <p>CAMP MAGRUDER</p>
            <img src="{{ asset('images/nav-divider.png') }}" alt="Nav Divider">
            <p>JUNE 28 - JULY 1</p>
            <img src="{{ asset('images/nav-divider.png') }}" alt="Nav Divider">
            <p>$200/CHILD</p>
        </div>
        <div class="menu-placeholder">&nbsp;</div>
        <div class="menu hide menu-toggle-wrapper">
            <div class="menu-item bg-red"><a href="about"><p>CAMP</p></a></div>
            <div class="menu-item bg-green"><a href="speaker"><p>GUEST SPEAKER</p></a></div>
            <div class="menu-item bg-yellow"><a href="counselors"><p>COUNSELORS</p></a></div>
            <div class="menu-item bg-red"><a href="counselors"><p>FAQs</p></a></div>
            <div class="menu-item bg-green"><a href="counselors"><p>GALLERY</p></a></div>

        </div>
    </div>

    <div class="container grid ">

        @yield('content')
        @yield('cta')

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
        <div class="container">
            <div class="sign-up col12">
                <input type="text" placeholder="Sign up for more info">
                <button>SIGN UP</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        jQuery(document).ready(function(){
            $( ".cross" ).hide();

            $( ".menuToggle" ).click(function() {
                $( ".menu" ).toggleClass( "hide");
                $( ".menuToggle" ).hide();
                $( ".menu-placeholder" ).hide();
                $( ".cross" ).show();
            });

            $( ".cross" ).click(function() {
                $( ".menu" ).toggleClass( "hide");
                $( ".cross" ).hide();
                $( ".menuToggle" ).show();
                $( ".menu-placeholder" ).show();
            });
        });

    </script>

</body>
</html>
