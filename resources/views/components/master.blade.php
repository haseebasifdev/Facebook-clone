<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Facebook</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6fb;
        }

        button.side-link {

            border: none;
            color: black;
            /* text-align: start; */
            text-decoration: none;
            display: block;
            cursor: pointer;
            /* padding: 4px 16%; */
            /* width: 10%;
             */
        }

        button.side-link:hover {
            background-color: white;
            color: red;
        }

        ul.side-link-ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 10%;
        }

        li a.side-link {
            display: block;
            color: #000;
            padding: 4px 8px;
            text-decoration: none;
        }

        li a.side-link:hover {

            background-color: white;
            color: black;

        }

        ul.user {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li a.user {
            display: block;
            width: 100%;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.user:hover {

            background-color: #e6e6e6;
            color: black;

        }

        div.show {
            margin-left: 10%
        }

        /* a.user {
            color: black;
            font-size: 1vw;
            display: block;
        }



        a.user:hover {
            text-decoration: none;
            border-radius: 5px;
            color: black;
        }

        li.friend:hover {
            background: rgb(220, 220, 220);
        } */

        /* p */
        /* nav.navbar {
            width: 100%;
            height: 7%;
        } */

        /*
        form.search {
            margin-left: 7%;
            padding: 10px;
        }

        ul.link {
            margin-left: 10%;
        } */
        div.bar
        {

            width: 100%;
            height: 5%;
        }
    </style>
</head>

<body>
    {{-- <h1>
                <img src="/images/facebook.png" width="50px" alt="facebook" srcset="">
            </h1> --}}

    <div class="bar justify-content-center">
        @include('_navbar')
    </div>
    <div id="app">
        <section>
            {{--
            <header>
                {{-- <h1>
                    <img src="/images/facebook.png" width="50px" alt="facebook" srcset="">
                </h1> --}}
            {{-- </header> --}}
        </section>
        {{$slot}}
    </div>
</body>

</html>
