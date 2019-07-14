<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:site_name" content="Vortexcasts">
        <meta property="og:title" content="Vortexcasts">
        <meta property="og:description" content="Improve your skills & life with screencasts on all aspects of development, devops, sysadmin, productivity & more">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://vortexcasts.com">
        <meta property="og:image" content="https://vortexcasts.com/images/og-card.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@vortex_casts">
        <meta name="twitter:title" content="Vortexcasts">
        <meta name="twitter:description" content="Improve your skills & life with screencasts on all aspects of development, devops, sysadmin, productivity & more">
        <meta name="twitter:image" content="https://vortexcasts.com/images/og-card.png">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ef961d">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="https://vortexcasts.com/" />
        <meta name="description" content="Improve your skills & life with screencasts on all aspects of development, devops, sysadmin, productivity & more">
        <title>Get better everyday | Vortexcasts</title>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/app.css') }}"/>
        <script src="{{ secure_asset('js/app.js') }}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143821862-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-143821862-1');
        </script>
    </head>
    <body class="leading-normal text-gray-800">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="text-center" id="app">
                <h1 class="text-red-400 text-3xl"><img src="/images/logo.png" style="height:80px;width:80px;"/>Vortexcasts</h1>
            </div>

            <example-component></example-component>
        </div>
    </body>
</html>
