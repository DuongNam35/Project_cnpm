<?php  
    include "connect.php";   
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $thongtin = $_POST['thongtin'];
    $sql = "INSERT INTO user (ten, email, thongtin) VALUE ('$ten', '$email', '$thongtin')";
    if(mysqli_query($conn,$sql))
    {
        header('location:./');
    }
     else {
    echo "lỗi";
    }
        
    