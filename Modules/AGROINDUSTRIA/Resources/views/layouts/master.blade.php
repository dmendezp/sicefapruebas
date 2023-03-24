<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module AGROINDUSTRIA</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/agroindustria.css') }}"> --}}
       <script src="https://kit.fontawesome.com/6364639265.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{asset('cssagroindustria/styleinvb.css')}}">

    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/agroindustria.js') }}"></script> --}}
    </body>
</html>
