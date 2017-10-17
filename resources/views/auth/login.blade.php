<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Register">
    <meta name="keywords" content="Register">
    <title>IMS | Register</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <!-- /site favicon -->
    <link href="/css/main.css" rel="stylesheet">
    {{--<link href="/css/mouldifi-forms.css" rel="stylesheet">--}}


    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="login-page">
<div class="login-container">
    <div class="login-branding">
        <a href="index.html"><img src="/images/logo.png" alt="Mouldifi" title="Mouldifi"></a>
    </div>
    <div class="login-content">
        <h2><strong>خوش آمدید</strong>، وارد شوید</h2>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

{{--
            <div class="form-group">

                    <div class="checkbox checkbox-replace">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> مرا به خاطر بسپار
                        </label>
                    </div>
            </div>--}}

            <div class="form-group">
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">مرا به خاطر بسپار</label>
                </div>
            </div>


            <div class="form-group">
                <button class="btn btn-primary btn-block">ورود</button>
            </div>
            <p class="text-center"><a href="forgot-password.html">کلمه عبور خود را فراموش کرده اید؟</a></p>
        </form>
    </div>
</div>
<!--Load JQuery-->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>

