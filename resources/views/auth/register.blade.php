
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Ielts Preperation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>


<body id="LoginForm">
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <img src="#" alt="">
                <p>Register Here For New Membership</p>
            </div>
            <form id="Login" method="POST" action="{{ route('register') }}" aria-label="Register">
                {{csrf_field()}}                <div class="form-group">

                    <input type="text" name="name" class="form-control"
                           id="inputName" placeholder="Full Name"  required autofocus>
                           @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control"
                           name="email"
                            required placeholder="Email">
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <div class="form-group has-feedback">
                    <input type="date" class="form-control" name="DOB"
                            required placeholder="Date of Birth">
                                    </div>
                <div class="form-group has-feedback">
                    <input type="number" class="form-control"
                           name="phone"
                            required placeholder="Contact Number">
                                    </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control"
                           name="password" required placeholder="Password">
                                    </div>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required
                           placeholder="Retype password">
                </div>

                <div class="form-group remember-check">
                    <input type="checkbox" class="" id="checkRemember" required>I agree to the <a href="#">terms and
                        conditions </a>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                </form>
                <p class="or-p">- OR -</p>
                <a href="#" class="btn btn-facebook-login">
                    <i class="fab fa-facebook-f"></i>
                    Sign up using Facebook
                </a>
                <a href="" class="btn btn-google-login">
                    <i class="fab fa-google-plus-g"></i>
                    Sign up using Google+
                </a>
                <a href="{{route('login')}}" class="register-new">I already have a membership.</a>
            
        </div>
    </div>
</div>


<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
