<?php
$serverName = "sql104.epizy.com";
$userName = "epiz_32929807";
$password = "MhqZX9M5EEj8";
$dbName = "epiz_32929807_mughnifirdaus";

//buat koneksi
$conn = mysqli_connect($serverName,$userName,$password,$dbName);

try {
    if (!$conn) {
        die("Koneksi Gagal!". mysqli_connect_error());

    }
}
catch(Exception $e){
    echo "Ada error di mysql: ".$e;
    }
    
?>