<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body >
    <div class="wrapper fadeInDown" >
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="img/user.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form method="POST" action="{{ route('login') }}">
            @csrf

                @if($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $e)
                        <li>{{$e}}</li>
                    @endforeach
                  </div>
                @endif
             
            <div class="form-group row">
              <div class="col-md-12">
                <input type="email" id="email" class="fadeIn second"  name="email" placeholder="Email" required autofocus>
               
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-12">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
              </div>
            </div>
            
                <input type="submit" class="fadeIn fourth" value="Log In">
         
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
             @if (Route::has('password.request'))
                <a class="underlineHover" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
             @endif
          </div>
      
        </div>
      </div>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

</body>
</html>