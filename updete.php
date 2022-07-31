<?php

include("conexion.php");
$con=conectar();

$id_usuario =$_POST['id'];
$nombres    =$_POST['nom'];
$apellido  =$_POST['ape'];

$sql="UPDATE usuarios SET  nom='$nombres',ape='$apellido' WHERE id='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>