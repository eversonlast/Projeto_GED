<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url(mix('admin/css/style.css'))}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/util.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url(mix('admin/js/script.js'))}}"></script>
    <title>Sistema GED</title>
</head>
<body class="app">
    <div class="header">
        <img src="{{asset('img/unitau_azul_menor.png')}}" alt="" class="mx-3 my-3">
        <span>Universidade de Taubaté</span>
    </div>
    <div class="menu">        
            <nav>
                <ul class="menu">
                    <li><a href="{{route('site.home')}}">Home</a></li>
                    <li><a href="{{route('site.form')}}">Cadastro de Imagem</a></li>
                    <li><a href="{{route('site.listagem')}}">Lista de Imagem</a></li>
                    <li><a href="#">Sair</a></li>
                </ul>
            </nav>            
       
    </div>         
        <div class="content">
            @yield('content')
        </div>
</body>

</html>