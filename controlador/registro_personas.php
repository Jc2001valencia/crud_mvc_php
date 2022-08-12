<?php



if(!empty($_POST["btnregistro"])){
    if(!empty($_POST["nombre"])and!empty($_POST["apellidos"])and!empty($_POST["dni"])and!empty($_POST["fecha"])and!empty($_POST["correo"])){
        

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellidos"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql=$conexion->query("INSERT INTO `persona` (`nombre`, `apellido`, `dni`, `fecha_nac`, `correo`) VALUES('$nombre','$apellido','$dni','$fecha','$correo')");

            if($sql==1){
                echo'<div class="alert alert-success">Persona registrada con Exito</div>';
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

