<?php

include "../modelo/conexion.php";

$id=$_GET["id"];

$sql=$conexion->query("SELECT * FROM `persona`WHERE `id_persona` = $id");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6da46d7f52.js" crossorigin="anonymous"></script>
</head>
<body>


<h1 class="text-center p-3">MODIFICAR</h1>


<div class="container-fluid row">
    <!-- formulario -->
<form class="col-4 p-2 m-auto" method="POST">
    <h2 class="text-center text-secondary">Modificar Registro de personas</h2>
  

    <input type="hidden" class="form-control" name="id_p" value="<?= $_GET["id"] ?>">
        <?php

   include "../controlador/modificar.php";

    while($datos=$sql->fetch_object()){

    ?>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="hiden" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellido ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI </label>
        <input type="text" class="form-control" name="dni"value="<?=  $datos->dni ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha de nacicmiento</label>
        <input type="date" class="form-control" name="fecha"value="<?= $datos->fecha_nac ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo"value="<?= $datos->correo ?>">
    </div>
    <?php
    }
        ?>
  <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Modificar</button>
</form>
  </div>  
</body>
</html>