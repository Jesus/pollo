<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        {!! Html::style('assets/css/app.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: black; background-image: url({{url('images/pollo1.jpg')}}); background-size: cover; padding-bottom: 50px;">
        @if (Auth::user())
            @if (Auth::user()->type == 'admin')
                @include('partials.header-admin')
            @else
                @include('partials.header')
            @endif
        @endif
        @if (Auth::guest())
            @include('partials.header')
        @endif
        @include('pedidos.partials.crear')
        @include('common.errors')
        @yield('content')
        @include('partials.footer')
    </body>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    {!! Html::script('assets/js/bootstrap.min.js') !!}
</html>
