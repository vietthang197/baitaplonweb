<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/customcss/cssindex.css">
    <script src="/js/jQuery/jquery-3.2.1.min.js"></script>
    <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;color:#1e7e34;margin-top: 40px;">Đăng ký để đăng và xem ảnh kỷ yếu</h1>
        <hr class="colorgraph">
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" id="formregister" action="/controller/checkregister.php" autocomplete="off" method="GET">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="ip_username" class="form-control" name="username" placeholder="Username" aria-required="true" required>
                    </div>
                    <div class="input-group" style="margin-top: 10px;">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" id="ip_email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group" style="margin-top: 10px;">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" id="ip_password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group" style="margin-top: 10px;">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" id="ip_comfirmpassword" class="form-control" name="confirmpassword" placeholder="Confirm Password" required>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" id="btndangnhap" type="submit" style="margin-top: 20px;">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/customjs/jsregister.js"></script>
</body>
</html>