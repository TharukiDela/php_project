<?php

$conn = mysqli_connect("localhost","root","","info");

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `invoice_master` WHERE id =$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: view.php");
    }
}




?>
