<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRS</title>
    <link rel="stylesheet" href="Css/PQR.css">
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    
</head>
<body>
    <div class="go-top">
        <span><i class="fas fa-angle-up"></i></span>
    </div>
   
    <div class="contenedor">
        


        <main class="Contenido">

            <div class="skew-arriba"></div>

            <div class="deg-F"></div>
           
            <div class="ejeZ">
                   
                <div class="content">
                    
                    <div class="title">
                        <h2>Peticiones Quejas y reclamos</h2>
                        <hr>
                    </div>

                    <div class="formulario-content">
                        <form id="formulario" action="" method="POST"  enctype="multipart/form-data" >

      
                        <div class="box">
                        <label class="labelbox">Tipo de PQRS</label><br>
                            <select name="Tipo" >
                            <option value="Peticiones">Peticiones</option>
                            <option value="Quejas">Quejas</option>
                            <option value="Reclamos">Reclamos</option>
                            <option value="Denuncias">Denuncias</option>
                            <option value="Sugerencias">Sugerencias</option>
                            <option value="Felicitaciones ">Felicitaciones </option>
                            </select>

                        </div>

                            <label class="label1" for="user">Nombre</label>
                            <input class="demas" type="text" id="nombre" value="<?php echo $Nombre ?> <?php echo $Apellido ?>" name="Nombre" placeholder="Ingresa tu nombre">

                            <label class="label1" for="email">Correo Electronico</label>
                            <input class="demas" type="email" id="correo" value="<?php echo $Correo ?>" name="Correo" placeholder="Ingresa tu correo electronico">

                            <label class="label1" for="mensaje">Escribe tu mensaje</label>
                            <textarea name="Mensaje" id="mensaje" ></textarea>



                        <div class="input-file">
                            <label for="" class="input-file__field">Archivo Evidencia</label>
                            <input type="file" id="file" class="input-file__input"  name="Evidencia" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                            <label for="file" class="input-file__btn">Seleccionar archivo</label>
                        </div>


                        <div class="box2">
                        <label class="labelbox2">¿A quien va dirijida?</label><br>
                            <select name="Dirigida">
                            <option value="Administrador">Aplicacion</option>
                            <option value="Representante">Empresa</option>

                            </select>

                            </div>

                        
                            
                            
                            <div class="send"><button type="submit" name="PasajeroPQRS">Enviar</button></div>

                            

                        </form>
                    </div>

                    <div class="contenedor-abajo">
                        <div class="content-aba">

                        </div>
                        <div class="content-aba">
                            <a href="Pasajero.php"><h4>Click Para Volver</h4></a>
                        </div>
                        <div class="content-aba">
                        </div>
                    </div>

                    <h2 class="titulo-final">&copy; Anderson Alvarado | Juan David Bravo</h2>

                </div>
            </div>
        </main>

        <aside class="sidebar">

            <img class="Imagenside" src="img/Sidebar.png" alt="">

        </aside>
        <div class="widget-1"><img class="imgwid1" src="img/Widget1.jpg" alt=""></div>
        <div class="widget-2"><img class="imgwid2" src="img/Widget2.jpg" alt=""></div>

        <footer class="footer">
            <div class="nosotrosfooter"><img class="imgwid3" src="img/FooterNosotros.png" alt=""></div>

        </footer>

    </div>

     <!-- JS -->

     <script src="https://kit.fontawesome.com/c044230bd1.js" crossorigin="anonymous"></script>
     <script src="js/jquery-3.4.1.min.js"></script>
     <script src="js/Nosotros.js"></script>
     <script src="js/Archivo.js"></script>
</body>
</html>