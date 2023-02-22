<?php
//dinamic
    $nama_depan = "Average";
    $middle_name = "BRAIN DIFF";
    $nama_blkg = "Gachikoi";
    $usia = 17;
    $ipk = 3.99;
    $hadir = false;
    $sallary = null;
    echo"Full Name : ".$nama_depan." ".$middle_name." ".$nama_blkg;
    echo"<br>Age : $usia Years Old";
    $usia = 20;
    unset($usia);
    echo"<br>Age : $usia Years Old";
    

    //static
    define("ttl","Japan");
    echo"<br>";
    echo "Place of Birth : ". ttl;

    //global
    /*
    1. session --> $_SESSION['nama']
    2. Cookie --> $_COOKIE['namacookie']
    3. Post --> $_POST['npm']
    4. Get --> $_GET['npm']
    5. Server --> $_SERVER[]
    */
?>