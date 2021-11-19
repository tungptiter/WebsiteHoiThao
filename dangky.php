<?php

echo "welcome";
 
    $hovaten = $_POST['hovaten'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai'];
    $diadiem = $_POST['diadiem'];

    // Database connection 
    $conn = new mysqli('localhost', 'root', '', 'metaverse');
    echo "connect";
    // if($conn->connect_error){
    //     die('connection failed: ' .$conn->connect_error);
    // }
    // else{
    //     $stmt = $conn->prepare("insert into hoithao(hovaten, email, sodienthoai, diadiem)
    //     values(?,?,?,?)");
    //     $stmt->bind_param("ssss", $hovaten, $email, $sodienthoai, $diadiem);
    //     echo "dang ky thanh cong";
    //     $stmt->close();
    //     $conn->close();
    // }
?>