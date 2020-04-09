<?php
include "connect.php";
$id = $_GET['del'];
$sqldel = "DELETE FROM user WHERE id= '$id'";
if(mysqli_query($conn,$sqldel))
    {
        header('location:./');
    }
     else {
    echo "Lỗi";
    }
       
?>