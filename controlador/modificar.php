<?php



if(!empty($_POST["btnregistro"])){
    if(!empty($_POST["nombre"])and!empty($_POST["apellidos"])and!empty($_POST["dni"])and!empty($_POST["fecha"])and!empty($_POST["correo"])){
        
        $id = $_POST["id_p"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellidos"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql=$conexion->query("UPDATE `persona` SET `nombre`='$nombre',`apellido` = '$apellido', `dni` = '$dni', `fecha_nac` = '$fecha', `correo` = '$correo' WHERE `persona`.`id_persona` = '$id'");

            if($sql==1){
                echo'<div class="alert alert-success">Persona registrada con Exito</div>';
                header("location:../index.php");

            }else{
                
                echo'<div class="alert alert-danger">Error al Registrar</div>';
            }

    }
    else
    {
        echo'<div class="alert alert-danger">ALGUNOS DE LOS CAMPOS ESTAN VACIOS!!!</div>';
    }
    

}
?>