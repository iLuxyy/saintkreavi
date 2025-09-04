<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "db_undangan";

    $db = mysqli_connect ($hostname, $username, $password, $database_name);
    if ($db->connect_error){
        echo "koneksi db gagal";
        die("eror");
    }
?>