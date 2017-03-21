<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pittsburgh Street Sweeping</title>
        <script src="https://use.fontawesome.com/825a45fc97.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header class="header @yield('header_class')">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('/images/bridge.svg') }}" alt="Pittsburgh Street Sweeping">
                    <span>PGH <span>Street</span> Sweeping</span>
                </div>
                <nav class="main-nav">
                    <a href="{{ url('/') }}" alt="PGH Street Sweep"{{ isActive('/') }}>Home</a>
                    <a href="{{ url('/schedule') }}" alt="Street sweeping schedule"{{ isActive('schedule') }}>Schedule</a>
                    <a href="/about-us" alt="About PGH Street Sweeping"{{ isActive('about-us') }}>About Us</a>
                    <span class="signup-login-btn">
                        <a href="{{ url('/signup-login') }}" alt="Sign up for PGH Street Sweep"{{ isActive('signup-login') }}>Sign Up / Login</a>
                    </span>
                </nav>
            </div>
            @yield('header')
        </header>
        @yield('content')
    </body>
</html>