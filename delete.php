<?php

include("conexion.php");
$con=conectar();

$id_usuario =$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>