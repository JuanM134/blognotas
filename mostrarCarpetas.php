<?php
    $listar = null;
    $directorio = opendir("Repositorio/");
    
    while($elemento = readdir($directorio)){
        if($elemento != "." && $elemento != ".."){
            if(is_dir("Repositorio/".$elemento)){
                $listar .= "
                <tr>
                    <td><center><strong>$elemento</strong></center></td>
                    <td><center><a href='./archivos/archivos.php?directorio=$elemento'>Abrir Archivos</a></center></td>
                </tr>";
            }
        }
    }
            
?>