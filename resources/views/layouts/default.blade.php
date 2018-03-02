<!DOCTYPE html>
<html>
    <head>
        <title>小莉北垣店</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._header')
        
        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                @yield('content')
            </div>
        </div>
    </body>
</html>