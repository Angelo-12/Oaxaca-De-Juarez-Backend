<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" rel="stylesheet">
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
   
</head>
<body>
  <div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="img/user.png" />
            </div>
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $e)
                            <li>{{$e}}</li>
                        @endforeach
                    </div>
                @endif

                <div class="form-group" id="user-group">
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email"/>
                </div>
                <div class="form-group" id="contrasena-group">
                    <input id="password" type="password" class="form-control" placeholder="Contrasena" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
            </form>
            <div class="col-12 forgot">
                @if (Route::has('password.request'))
                    <a class="underlineHover" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </div>
            
        </div>
    </div>
</div> 
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>                                             
</body>
</html>