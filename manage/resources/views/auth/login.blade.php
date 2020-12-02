
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
                <form class="col-12 col-md-8 col-lg-4" method="POST" action="{{ route('auth.login.submit') }}">
                            {{ csrf_field() }} 
                        <h2>Welcome Back!</h2>
                        <div class="form-group">
                            <label>Username</label> 
                            <input id="email" type="text" class="form-control custominputlogin" name="email" value="{{ old('email') }}" required autofocus>
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



<!--
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
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
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>-->
      