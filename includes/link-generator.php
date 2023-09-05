<?php

// include("dbconnect.php");

function shortlink() {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < 5; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    
    echo $randomString;
}

// function sqldata($long_link,$short_l){

//     $conn = mysqli_connect("localhost","root","","ziplyfy") or ("Conection Failed");
//     $short_link = "http://localhost/ziplyfy/?l=".$short_l;
//     $sql = "INSERT INTO `links` (`l_link`, `s_link`) VALUES ('$long_link', '$short_link');";
//     $data_send = mysqli_query($conn, $sql);
//     echo $data_send;
// // mysqli_close($conn);
// }

// $short_l = shortlink();
$long_link =$_POST['link'];

echo shortlink();
// echo sqldata($long_link,$short_l);






?>