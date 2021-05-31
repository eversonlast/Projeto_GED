<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Sistema GED</title>
</head>
<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-2 text-center">
                
                <img src="{{asset('img/logo_UNITAU_branco.png')}}" alt="">
                
            </div>
            <div class="col-md-6 login-form-1">
                <h3>Sistema de GED</h3>
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="CPF *" value="" maxlength="11"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Sua Senha *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Login">Esqueceu a Senha?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>