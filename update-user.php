  
<?php  
    include "connect.php";
    $id = $_POST['edit-id'];
    $ten = $_POST['edit-ten'];
    $email = $_POST['edit-email'];
    $thongtin = $_POST['edit-thongtin'];
    $sqlupdate = "UPDATE user SET ten = '$ten', email = '$email', thongtin = '$thongtin' where id='$id' ";
    if(mysqli_query($conn,$sqlupdate))
    {
        header('location:./');
    }
     else {
    echo "update lỗi";
    }
        
    