<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="/css/customcss/csshomepage1.css">
    <script src="/js/jQuery/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->

</head>
<?php
session_start();
if($_SESSION['username'] == null || $_SESSION['passwords'] == null){
    echo "<div><h1 style='color:forestgreen;text-align: center;'>Bạn chưa đăng nhập</h1></div>";
    echo "<div><h3 style='color:black;text-align: center;'>Error 404: Page not found</h3></div>";
}else{
    ?>
    <body>
    <?php include 'menu_homepage.php';?>
    <div>
        <div style="margin: 0 auto;width:100%;height: 100%;background-color: #CDD1D8;">
            <div id="make"  style="background-color:#F2F3F4;float:left;width:15%;height: 100%;margin-right:20px;">
                <div class="fuck" style="display: inline-block;width:100%;text-align: initial;margin-top:2%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success ">Trang chủ</span></a>
                    </div>
                </div>
                <div class="fuck" style="display: inline-block;width:100%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success ">Thông tin tài khoản</span></a>
                    </div>
                </div>
                <div class="fuck" style="display: inline-block;width:100%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success ">Thông tin tài khoản</span></a>
                    </div>
                </div>
                <div class="fuck" style="display: inline-block;width:100%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success ">Thông tin tài khoản</span></a>
                    </div>
                </div>
                <div class="fuck" style="display: inline-block;width:100%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success ">Thông tin tài khoản</span></a>
                    </div>
                </div>
                <div class="fuck" style="display: inline-block;width:100%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success ">Thông tin tài khoản</span></a>
                    </div>
                </div>
                <div class="fuck" style="display: inline-block;width:100%;margin-bottom:2%;">
                    <div style="display: block;margin:10px;">
                        <a style="margin-top:10px;margin-bottom: 10px;color:#1D2025;text-decoration-line: none;" href="#"><span class="text-success">Xem tất cả ảnh</span></a>
                    </div>
                </div>
            </div>
            <div class="fuckphai" style="background-color: #FFFFFF;width: 100%;height:100px;">
                <?php include '../controller/showImageController.php';?>

            </div>
        </div>
    </div>

    <script src="/js/customjs/js_homepage.js"></script>
    </body>
<?php }?>
</html>