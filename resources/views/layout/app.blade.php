<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script src="{{ URL:: to('js/app.js')}}" type="text/javascript"></script>
</body>
</html>