<?php

if(isset($_POST['nombre-archivo']) && isset($_POST['texto-archivo'])){

        $dir = $_GET['directorio'];
        $archivo = $_POST['nombre-archivo'] . ".txt";
        $contenido=$_POST['texto-archivo'];
        
        if(file_exists("../Repositorio/$dir/". $archivo)){
            echo "Archivo ya existente...";
            exit;
        }
        
        if( $archivo == false ){
            echo "Error al crear el archivo";
        }else{
        
            $myfile = @fopen("../Repositorio/$dir/" . $archivo . "", "w+") or die("Unable to open file!");
            if(file_exists("../Repositorio/$dir/" . $archivo)){
                fwrite($myfile, $contenido);
            }else{
                die("No se ha podido crear el archivo."); 
            }
            fclose($myfile);
        }
        
}
