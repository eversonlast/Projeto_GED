<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url(mix('admin/css/style.css'))}}">
    <title>Sistema GED</title>
</head>
<body class="app">
    {{-- <div > --}}
        {{-- <div class="header">
            
        </div> --}}
        
            @yield("principal") 
      
        
        {{-- <div class="menu">Menu</div> --}}

        @yield('side')
        <div class="content">Conteúdo</div>
    {{-- </div> --}}
</body>
</html>