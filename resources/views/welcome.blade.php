<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel- parte publica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height" style="background-color: lightblue">
            @if (Route::has('login'))
                <div class="top-right links" style="margin-right: 8rem; margin-top:2rem">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth

                    @auth
                        <h6> <span class="Log_on">Logged</span>  {{ Auth::user()->name }}</h6>
                    @endauth

                    @guest
                        <h6> <span class="No_Log">Not Logged</span>{{ Auth::user() }} </h6>
                    @endguest
                </div>
            @endif

            <div class="content" style="background-color: antiquewhite">
                <div class="title m-b-md">
                    <h1>
                       BoolPress 
                    </h1>
                </div>
                
                <div>
                    <img src="{{ asset("/img/welcome.png")}}" alt="">
                </div>
                

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            </div>
        </div>
        <script src="{{ asset("js/frontend.js") }}"></script>
    </body>
</html>
