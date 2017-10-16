<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 27/09/2017
 * Time: 2:53 PM
 */
session_start();
$dbhost = "localhost:3306";
$dbuser="root";
$dbpass ="12345678";
$db_name='projectdemo';
$tb_name='informationuser';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}
$select_db= mysqli_select_db($conn,$db_name);
if(!$select_db){
    die('Could not select database');
}
$get_username = $_GET['username'];
$get_password = $_GET['password'];
$get_email = $_GET['email'];
$get_username = stripslashes($get_username);
$get_password = stripslashes($get_password);
$get_email = stripslashes($get_email);
$sql_query_login = "SELECT * FROM $tb_name WHERE username='$get_username'";
$result_login = mysqli_query( $conn,  $sql_query_login);
if(mysqli_num_rows($result_login)<1) {
    $sql_query_register = "INSERT INTO $tb_name (username,passwords,email) VALUES('$get_username','$get_password','$get_email')";
    $result_register = mysqli_query($conn, $sql_query_register);

    if (!$result_register) {
        die('Could not insert data: ' . mysqli_error());
    } else {
        echo "<script>alert('Bạn đã đăng ký thành công, giờ hãy đăng nhập');</script>";
        echo "<script> location.href='/index.php'; </script>";
        exit;
    }
}else{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Username đã được sử dụng, thử username khác');\n";
    echo "window.location='/html/register.php'";
    echo "</script>";
    exit;
}
$conn->close();