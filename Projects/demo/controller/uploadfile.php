

<?php
if (!empty($_FILES['fileToUpload']['name'][0])) {
//Connect database
    session_start();
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "12345678";
    $db_name = 'projectdemo';
    $tb_name = 'imagedata';
    $id = $_SESSION['id'];
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if (!$conn) {
        die('Could not connect: ' . mysqli_error());
    }
    $select_db = mysqli_select_db($conn, $db_name);
    if (!$select_db) {
        die('Could not select database');
    }


//end connect database
    $files = $_FILES['fileToUpload'];
    $allowed = array('gif', 'png', 'jpg','JPG','PNG');
    $number_file = count(array_filter($_FILES['fileToUpload']['name']));
    $counts = 0;
    $progress = 0;
    foreach ($files['name'] as $index => $value) {
        $counts++;
        $image = addslashes($files['tmp_name'][$index]);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        $sql = "INSERT INTO $tb_name(contentimg,id) VALUES ('$image',$id)";
        $result = mysqli_query($conn, $sql);
    }


}

?>


