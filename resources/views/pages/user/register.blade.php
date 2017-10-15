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
    <link rel='shortcut icon' type='image/x-icon' href='/images/favicon.ico' />
    <!-- /site favicon -->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/mouldifi-forms.css" rel="stylesheet">


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
        <h2>Create an account</h2>
        <form method="POST" action="{{ route('register.post') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group form-action">
                <button type="submit" class="btn btn-primary btn-block">ثبت نام‍</button>
            </div>
            <p class="text-center">Have an account <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
</div>
<!--Load JQuery-->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
