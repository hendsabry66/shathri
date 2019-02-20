<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{__('admin.login')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{url('admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admin/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('admin/plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <Style>
      .form-control-feedback{
        left:0;
      }
      .has-feedback .form-control{
        padding-left: 42.5px;
        padding-right: none;
        text-align: right;
      }
      .login-box-body, .register-box-body{
        text-align: right;
      }

    </Style>
  </head>
  <body class="login-page">
    <div class="login-box">
      <!-- <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div> --><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">{{__('admin.login')}} </p>
        <form action="{{url('admin/login')}}" method="post">
           {{ csrf_field() }}
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="{{__('admin.email')}} ">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder=" {{__('admin.password')}} ">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remmberme"> {{__('admin.remmberme')}} 
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">{{__('admin.add')}} </button>
            </div><!-- /.col -->
          </div>
        </form>

       <!--  <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div> --><!-- /.social-auth-links -->

        <a href="#">{{__('admin.forget_password')}}</a><br>
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{url('admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{url('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{url('admin/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
