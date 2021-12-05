<<?php
    $directorio = $_GET['directorio'];
?>

<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Archivero</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
        </head>
    
    
        <body class="d-flex flex-column h-100">
    
        <div id = "container">
    
    
            <div id ="cuerpo">

                <main>
                    <div class="container">
                        <form enctype="multipart/form-data" id="formulario" method="POST">
                            
                             <h3>Creador de Archivos</h3> <br>
                            
                            <h5>Nombre del Archivo:</h5>
                            <div class="row g-3">
                                <div class="col-auto">
                                    <input class="form-control" id="nombre-archivo" type="text" name="nombre-archivo">
                                </div>
                                <div class="col-auto" style="margin: 0px !important; padding: 20px 5px 5px 5px !important;">
                                    <label class="form-label" for="nombre-archivo" style="margin: 0px !important; font-size:25px !important;">.txt</label>
                                </div>
                            </div>
                            <br>
                            <textarea class="form-control" id="texto-archivo" name="texto-archivo" style="resize: none;" rows="10" cols="50"></textarea><br>
                            <center><input value="Crear" type="button" onclick="crear();"></center><br><br>
                        </form>
                    </div>
                    <div class="container py-3">
                        <table class="table caption-top" id="list_planogramas">
                            <h4>Lista de archivos dentro de la carpeta: (<?php echo $directorio ?>)<h4>
                            <tr>
                                <th scope="col"><center>Archivo</center></th>
                                <th scope="col"><center>Enlace de descarga</center></th>
                            </tr>
                        <?php
                            require "./listarArchivos.php";
                        ?> 
                        
                        </table>

                        <button type="button" class="btn btn-outline-primary"><a href="../index.php">Regresar</a></button>
                        
                    </div>
                </main>
                
            
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            
                <script>
                    function crear() {
                        $.ajax({
                            type: 'POST',
                            url: 'crearArchivo.php?directorio=<?php echo $directorio?>',
                            data: $('#formulario').serialize(),
                            success: function(respuesta) {
                                if (respuesta) {
                                    alert(respuesta);
                                } else {
                                    alert('Archivo creado correctamente. Por favor actualice la pagina');
                                }
                            }
                        });
                    }

                    
                </script>
            
    
            </div>
    
    
        <br><br>
    
            <div id = "pie" align="center"> 
            @Todos los derechos reservados. <br/> Maracaibo Venezuela
            </div>
    
    
        </div>
    
    
    
        </body>
    
    </html>