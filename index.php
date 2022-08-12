<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6da46d7f52.js" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center p-3">REGISTRO</h1>


<div class="container-fluid row">
    <!-- formulario -->
<form class="col-4 p-3" method="POST">
    <h2 class="text-center text-secondary">Registro de personas</h2>
    <?php
include "modelo/conexion.php";
include "controlador/registro_personas.php";
include "controlador/eliminar.php";
?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DNI </label>
    <input type="text" class="form-control" name="dni">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacicmiento</label>
    <input type="date" class="form-control" name="fecha">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registro</button>
</form>
<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">DNI</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col">ELIMINAR Y EDITAR</th>
      
    </tr>
  </thead >
  <tbody>

  <?php

include"modelo/conexion.php";
$sql=$conexion->query("SELECT * FROM `persona`");

while($datos=$sql->fetch_object()){

  ?>
    <tr>
      <td><?= $datos->id_persona ?></td>
      <td><?= $datos->nombre ?></td>
      <td><?= $datos->apellido?></td>
      <td><?= $datos->dni ?></td>
      <td><?= $datos->fecha_nac ?></td>
      <td><?= $datos->correo ?></td>
      <td>
        <a href="vistas/modificar.php?id=<?=$datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="index.php?id=<?=$datos->id_persona?>"class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    <?php
}
    ?>
  </tbody>
</table>
</div>

</div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>