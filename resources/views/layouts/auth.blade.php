<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{getConfig('site_name')}} | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <style type="text/css">
        body{
            background-image: url('/images/static/login-bg-min.png');
        }
    </style>

</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <!-- <a href="#">{{getConfig('site_name')}}</a> -->
            <a href="#"><img src="/images/static/login-logo.png"></a>
        </div>

        <div class="card">
            @yield('content')
        </div>

    </div>
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>


