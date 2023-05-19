<?php
include 'connect.php';
if(isset($_GET["deletaid"])){
    $ID=$_GET['deletaid'];

    $sql="delete from placa_de_video where ID=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>