<?php
    $hostname = "localhost";
    $username = "saint526";
    $password = "g#h9TbFdR90S3+";
    $database_name = "saint526_db_undangan";

    $db = mysqli_connect ($hostname, $username, $password, $database_name);
    if ($db->connect_error){
        echo "koneksi db gagal";
        die("eror");
    }
?>