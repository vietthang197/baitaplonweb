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
$get_username = $_POST['username'];
$get_password = $_POST['password'];
$get_username = stripslashes($get_username);
$get_password = stripslashes($get_password);
$sql_query_login = "SELECT * FROM $tb_name WHERE username='$get_username'";
$result = mysqli_query( $conn,  $sql_query_login);

if(! $result ) {
    die('Could not get data: ' . mysqli_error());
}
$count=mysqli_num_rows($result);

if($count==1){
    while($row = $result->fetch_assoc()) {
        if($row['passwords'] == $get_password){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $get_username;
            $_SESSION['passwords'] = $get_password;
            $_SESSION['id'] = $row['id'];
            echo "<script> location.href='/html/homepage.php'; </script>";
            exit;
        }else{
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Username or Password was incorrect!');\n";
            echo "window.location='/index.php'";
            echo "</script>";
            exit;
        }
    }
}else{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Username or Password was incorrect!');\n";
    echo "window.location='/index.php'";
    echo "</script>";
    exit;
}
$conn->close();