<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela do Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('style2.css')}}">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          
            <!-- Tabs Titles -->
    
             <!-- Icon -->
            <div class="container">
                <div class="fadeIn first">
                <img src="{{asset('img/unitau_azul_menor.png')}}" id="icon" alt="User Icon" class="logo_img" />
                </div>
            
                <!-- Login Form -->
                <form>
                    @csrf
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
                    <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
                    <input type="submit" class="fadeIn fourth" value="Login">
                </form>
            
                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Esqueceu a Senha?</a>
                </div>
            </div>
    
      </div>
    </div>
    
</body>
</html>

