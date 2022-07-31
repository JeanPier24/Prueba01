<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM usuarios";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAGINA DE PRUEBAS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>INGRESAR DATOS</h1>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="id" placeholder=" Id Usuario">
                        <input type="text" class="form-control mb-3" name="nom" placeholder=" Nombre">
                        <input type="text" class="form-control mb-3" name="ape" placeholder=" Apellido">

                        <input type="submit" class="btn btn-primary">
                    </form>

                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th></th>
                                <th></th>
                            </tr>

                        </thead>

                        <body>
                            <?php
                               while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['nom']?></th>
                                    <th><?php echo $row['ape']?></th>

                                    <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                                }
                            ?>
                        </body>

                    </table>

                </div>

            </div>

        </div>
</body>
</html>