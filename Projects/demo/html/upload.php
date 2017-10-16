<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload ảnh</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/customcss/csshomepage1.css">
    <script src="/js/jQuery/jquery-3.2.1.min.js"></script>
    <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
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
    <div class="container">

    <h2 id="text_status">Đang tải ....</h2>
    <div class="progress">
        <div id="setprogressbar" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
             style="width:0%;">
            0%
        </div>
    </div>

    </div>
    <div class="container_download">
        <div  style="margin: 0 auto;align:center;">
            <div style="margin: 5% auto;border: 2px solid;border-radius: 10px;padding: 5%;font-size: large;margin-left: 15%;margin-right: 15%;" >
                <form id="uploadForm" action="/controller/uploadfile.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputUploadFile">Chọn ảnh để tải lên: </label>
                        <input type="file" accept=".jpg,.png,.gif,.JPG,.PNG" name="fileToUpload[]" class="form-control" id="inputUploadFile" multiple>
                    </div>
                    <div class="form-group">
                        <label for="inputTenanh">Thay đổi tên ảnh (nếu muốn): </label>
                        <input type="text"  name="inputtenanh" class="form-control" id="inputTenanh">
                    </div>
                    <div class="form-group">
                        <label for="inputTaganh">Tag ảnh (nếu muốn): </label>
                        <input type="text"  name="inputtaganh" class="form-control" id="inputTaganh">
                    </div>
                    <button type="submit" name="uploadimage" class="btn btn-primary">Tải lên</button>
                </form>
            </div>
        </div>
    </div>
    </body>
    <script>
        $(document).ready(function () {
            $(".progress").hide();
            $('#text_status').hide();
            $('#uploadForm').submit(function (e) {
                $('#text_status').fadeIn(500);
                $(".progress").fadeIn(500);
                $(".container_download").fadeOut(1000);
                if($('#inputUploadFile').val()){
                    e.preventDefault();
                    $(this).ajaxSubmit({
                        beforeSubmit:function () {
                            $('.progress-bar').width('0%');
                        },
                        uploadProgress:function (event,position,total,percentComplete) {
                            $(".progress-bar").width(percentComplete+"%");
                            $(".progress-bar").html('<div id="progress-status">'+percentComplete+'%</div>');
                        },
                        success:function () {
                            $('#text_status').text("Đã xong!");
                            location.href='/html/homepage.php';
                        },
                        resetForm:false
                    })
                    return false;
                }
            })
        })
    </script>
<?php }?>
</html>