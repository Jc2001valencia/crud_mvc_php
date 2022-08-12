<?php

//include"../modelo/conexion.php";

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM `persona` WHERE `persona`.`id_persona` = '$id'");
    if($sql==1){
        echo'<div class="alert alert-success">Persona Eliminada con Exito</div>';
    }else{
        
        echo'<div class="alert alert-danger">Error al Eliminar</div>';
    }
}


?>