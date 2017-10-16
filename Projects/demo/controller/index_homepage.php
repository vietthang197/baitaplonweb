<?php
displayimage();
function displayimage(){
    $dbhost = "localhost:3306";
    $dbuser="root";
    $dbpass ="12345678";
    $db_name='projectdemo';
    $tb_album_name = 'albumimage';
    $tb_image_name = 'imagedata';
    $id = $_SESSION['id'];
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
    }
    $select_db= mysqli_select_db($conn,$db_name);
    if(!$select_db){
        die('Could not select database');
    }
    $sql = "SELECT * FROM $tb_album_name WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1){
        echo "<h3 style='text-align: center;'>Bạn chưa có album nào !</h3>";
        $conn->close();
    }else{
        $title = "<h1 style='text-align: center;color: forestgreen;'>Album đã tạo của bạn</h1>";
        echo $title;
        while($row = mysqli_fetch_array($result)){
            $stt_album = $id.$row['stt'];
            $ten_album = $row['ten'];
            $sqls = "SELECT id FROM $tb_image_name WHERE id = $stt_album";
            $results = mysqli_query($conn,$sqls);
            $so_luong_anh  = mysqli_num_rows($results);
            $ngay_tao = $row['ngaytao'];
            $gio_tao = $row['giotao'];
            $html_album_return = '<div id="'.$stt_album.'" class="gallery" onclick="show_album(this.id)">
                <h5>Tên album : '.$ten_album.'</h5>
                <h6>Ngày tạo: '.$ngay_tao.'</h6>
                <h6>Giờ tạo: '.$gio_tao.'</h6>
                <h6>Số lượng ảnh : '.$so_luong_anh.'</h6>
            </div>';

            echo $html_album_return;
        }
        $conn->close();
    }



}