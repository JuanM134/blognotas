<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Archivero</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    
        </head>
    
    
        <body class="d-flex flex-column h-100">
    
        <div id = "container">
    
    
            <div id ="cuerpo">

                <main>
                    <div class="container">
                        <form enctype="multipart/form-data" id="formulario" method="POST">
                            
                            <h3>Creador de Carpetas</h3><br>
                            
                            <h5>Nombre de la Carpeta:</h5>
                            <div class="row g-3">
                                <div class="col-auto">
                                    <input class="form-control" id="nombre-dir" type="text" name="nombre-dir">
                                </div>
                                <div class="col-auto">
                                    <input value="Crear" type="button" onclick="crear();">
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="container py-3">
                        <table class="table caption-top">
                            <h5>Listado de las carpetas dentro del servidor</h5>
                            <tr>
                                <th scope="col"><center>Carpeta</center></th>
                                <th scope="col"><center>Enlace de acceso</center></th>
                            </tr>
                        <?php
                            require "./mostrarCarpetas.php";
                            echo $listar;
                        ?>
                        </table>
                        
                    </div>
                </main>
                
            
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            
                <script>
                    function crear(){
                        $.ajax({
                            type: 'POST',
                            url: 'crearCarpetas.php',
                            data: $('#formulario').serialize(),
                            success: function(respuesta) {
                                if (respuesta == "Carpeta creada correctamente") {
                                    alert("Carpeta creada correctamente. Por favor actualice la pagina");
                                } else {
                                    alert('YA existe una carpeta con ese nombre');
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
    