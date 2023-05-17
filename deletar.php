<?php
include 'connect.php';
if(isset($get['deletaid'])){
    $ID=$get['deletaid'];

    $sql="delete from placa_de_video where ID=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>