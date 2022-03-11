<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')-Laravel Movies From DB</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        
        @include("partials.header")
    </header>

    <main>
        @yield('content')
    </main>


    <footer>
        @include("partials.footer")
        
    </footer>
</body>
</html>