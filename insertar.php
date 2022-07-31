<?php
include("conexion.php");
$con=conectar();

$id_usuario =$_POST['id'];
$nombres    =$_POST['nom'];
$apellido  =$_POST['ape'];



$sql="INSERT INTO usuarios VALUES('$id_usuario','$nombres','$apellido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>