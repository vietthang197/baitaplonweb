<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang đăng nhập</title>
    <script src="/js/jQuery/jquery-3.2.1.min.js"></script>
    <script src="/js/boostrapjs/js/bootstrap.min.js"></script>
    <script src="/js/customjs/jsindex.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/boostrapcss/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/customcss/cssindex.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-image:url('/res/img/backgroundindex.jpg')">
<div class="container">
    <div class="omb_login">
        <h1 style="color: #FFFFFF;text-align: center;margin-top: 40px;">Website xem ảnh kỷ yếu</h1>
        <hr class="colorgraph">
        <h3 class="omb_authTitle" style="color: #FFFFFF;">Đăng nhập hoặc <a href="/html/register.php">Đăng ký</a></h3>
        <div class="row omb_row-sm-offset-3 omb_socialButtons">
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-md btn-block omb_btn-facebook">
                    <i class="fa fa-facebook visible-xs"></i>
                    <span class="hidden-xs">Facebook</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-md btn-block omb_btn-twitter">
                    <i class="fa fa-twitter visible-xs"></i>
                    <span class="hidden-xs">Twitter</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-md btn-block omb_btn-google">
                    <i class="fa fa-google-plus visible-xs"></i>
                    <span class="hidden-xs">Google+</span>
                </a>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3 omb_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="omb_hrOr">
                <span class="omb_spanOr">hoặc</span>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" action="/controller/checklogin.php" autocomplete="off" method="POST" name="form">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username" id="input_username"  required>
                    </div>


                    <div class="input-group" style="margin-top: 10px;">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" class="form-control" name="password" placeholder="Password" id="input_password"  required>
                    </div>


                    <button class="btn btn-lg btn-primary btn-block"  type="submit" style="margin-top: 20px;">Đăng nhập</button>
                </form>
            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <p class="omb_forgotPwd">
                    <a href="#">Quên mật khẩu?</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>