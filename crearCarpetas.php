<?php
    $msg = null;
    if(isset($_POST['nombre-dir'])){
        $carpeta = $_POST['nombre-dir'];
        $ruta = "./";
        $directorio = $ruta.$carpeta;

        if(!is_dir($directorio)){
            $crear = mkdir($directorio, 0777, true);

            if($crear){
                $msg = "Carpeta creada correctamente";
            }else{
                $msg = "Ha ocurrido un problema al crear la carpeta";
            }
        }else{
            $msg = "La carpeta que intentas crear ya existe";
        }

        echo $msg;
    }
?>