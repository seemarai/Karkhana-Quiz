;<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Exam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url("/exx1.jpg");
                background-repeat: no-repeat;
                background-position: right top;
                background-attachment: fixed;
                background-size:100%;
            }
            .blur{
                z-index: 9999;
            }
            .coustm{
                background-color: #6aff7cd9;
                height: 300px;
                width: 700px;
                margin-right: 745px;
                vertical-align: middle;
                border-radius: 0 20px 20px 0;
                
            }
            .coustm1{
                height: 250px;
                margin-top: 70px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height blur">
            @if (Route::has('login'))
                <div class="top-right links">
                     <a href="{{ url('/home') }}">Home</a>
                      <a href="{{ url('/home') }}">About</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                   
                </div>

            @endif

        </div>
    </body>
</html>

