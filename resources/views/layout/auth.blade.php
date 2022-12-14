<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>auth</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/admin/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/general/css/alertify.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/admin/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="/admin/plugins/iCheck/square/blue.css">
        <script src="/general/js/alertify.min.js"></script>
        <script src="/general/js/general.js"></script>
    </head>
    <body class="hold-transition login-page">
        @yield('content')
        <!-- jQuery 3 -->
        <script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="/admin/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
              $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
              });
            });
        </script>

        @if(session()->has('success'))
            <script>alertify.success('{{session('success')}}')</script>
        @endif
        
        @if(session()->has('error'))
            <script>alertify.error('{{session('error')}}')</script>
        @endif

         @if(session()->has('warning'))
            <script>alertify.warning('{{session('warning')}}')</script>
        @endif

        @foreach($errors->all() as $error)
            <script>alertify.error('{{$error}}')</script>
        @endforeach

    </body>
</html>