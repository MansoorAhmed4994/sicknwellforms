
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/responsive.css') }}" />
    <script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo">
            <img src="{{ asset('public/theme-resources/images/logo.png') }}" class="img-fluid" />
        </a>
    </header>
    <div class="login-form d-flex align-items-center justify-content-center">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <form class="col-12 col-md-8 col-lg-4" method="POST" action="{{ route('client.login.submit') }}">
                           
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h2>Client Login</h2>
                        <div class="form-group">
                            <label>Username</label> 
                            <input id="email" type="email" class="form-control custominputlogin" name="email" value="{{ old('email') }}" required autofocus>
                            <div class="is-invalid invalid-feedback">This field is required.</div>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>  
                            <input id="password" type="password" class="form-control custominputlogin" name="password" required>
                            <div class="is-invalid invalid-feedback">This field is required.</div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Log In" />
                        </div> 
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>



      