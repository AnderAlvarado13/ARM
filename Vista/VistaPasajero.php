<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Pasajeros.css">
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    
    <title><?php echo $NombreP ?> <?php echo $ApellidoP ?>|Pasajeros</title>
</head>

<body>

<header class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
          <img src="img/Icono%20nav.png" >
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li>
                <button type="submit" class="btn btn-primary text-primary Btn_datos" data-toggle="modal" data-target="#exampleModalPQR" id="menu-toggle"><i class="fas fa-bell">
                <samp style="font-size: 12px; top: 15px;">1</samp></i></button>
              </li>                 
              <li class="nav-item active">
                <a class="nav-link text-dark" href="index.php">Inicio</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-dark" href="Pasajero.php">Actualizar</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-dark"  onclick="Mostrar_Ocultar()">Datos Personales</a>
              </li>   
                        
              <li class="nav-item active">
                <a class="nav-link text-dark"><?php echo $Correo ?></a>
              </li>
             
              <li>
                    <form action="Login.php" method="POST">
                      <button type="submit" class="btn btn-primary text-primary" id="menu-toggle" name="Cierra"><i class="fas fa-power-off"> Salir</i></button>
                  </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>  

      

    </header>

<script>
    function Mostrar(){
        document.getElementById("Datos").style.display="block";
    }
    function Ocultar(){
        document.getElementById("Datos").style.display="none";
    }
    function Mostrar_Ocultar(){
        let dat = document.getElementById("Datos");
        if(dat.style.display == "none"){
            Mostrar();
        }else{
            Ocultar();
        }
    }
</script>    
    <div id="Datos" class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="Imagenes/<?php echo $FotoP ?>" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Cambiar Foto
                            <input type="file" name="file" val/>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" >
                    <div class="profile-work">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombres:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $NombreP ?> <?php echo $ApellidoP ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Correo:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $CorreoP ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Telefono</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $TelefonoP ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Sexo:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><?php echo $SexoP ?></p>
                                    </div>
                                </div>                                
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <a href="">INICIO ARM</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row text-center" >
                       <div class="col-md-12">
                        <input type="button" class="profile-edit-btn" data-toggle="modal" data-target="#exampleModal" name="btnAddMore" value="Editar Perfil" />
                        </div>
                       <div class="col-md-12">
                        <input type="button" class="profile-edit-btn2"  data-toggle="modal" data-target="#exampleModalActual" name="btnAddMore" value="Actualizar Contraseña" />
                        </div> 
                       <div class="col-md-12">
                        <input type="button" class="profile-edit-btn3" onclick=' location.href="PQRSV2.php" ' value="Genera un PQRS" />
                        </div>                                                
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="container emp-profile-input">
        <form action="" method="POST">
          <div class="row">
               <div class="col-md-12">
              <h3>Eliga su Ruta:</h3>
            </div>
            <div class="col-md-4">
              <input type="text" name="Salida" id="Salida" class="form-control" placeholder="Punto de Salida">
            </div>
            <div class="col-md-4">
              <input type="text" name="Llegada" id="Llegada" class="form-control" placeholder="Punto de Llegada">
            </div>
            <div class="col-md-4">
              <input type="submit" name="Encuentra" class="profile-edit" id="btn" value="Encuentra Tu Ruta" />
            </div>        
                     
          </div>
        </form>
    </div>
<?php if(isset($_POST['Encuentra'])){?>            
    <?php foreach($Resultado as $R){?>    
    <div class="container emp-profile-Mapa">
    <div class="row text-center"> 
        <div class="col-md-12 ">
            <label style="color:#1C7CC8; font-family: inherit; font-size: 22px;">Informacion de Busqueda</label>
        </div>    
    </div>
        <hr>  
        <div class="row text-center"> 
        <div class="col-md-4 ">
          
            <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Tablilla</label>
            <img src="Informacion/<?php echo $R[9] ?>" style="width: 300px; height: 250px;">
        </div>
        <div class="col-md-4">
            <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Aspecto del Bus</label>    
            <img src="Informacion/<?php echo $R[10] ?>" style="width: 70%; height: 250px">
        </div>
        <div class="col-md-4">
        <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Logo de Empresa</label>       
            <img src="Informacion/<?php echo $R[12] ?>"style="width: 300px; height: 250px;"> 
        </div> 

        </div>
        <hr>
        <div class="row"> 
        <div class="col-md-9 text-center">     
            <h4 style="color:#1C7CC8; font-family: inherit;">Mapa</h4> 
            <img src="Mapas/<?php echo $R[5] ?>" height="580px" width="750px">
        </div>
        <div class="col-md-3 text-left" >  
           
        <div class="row">  
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Nombre Trayecto:
                    <div>
                    <samp style="color:#000000;"><?php echo $R[1] ?></samp></label>
                    </div>
                </div>
        </div> 
        <hr>
        <div class="row">                    
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Duracion Apox:
                    <div>
                    <samp style="color:#000000;"><?php echo $R[2] ?></samp></label>
                    </div>
                </div>
        </div>
        <hr>
        <div class="row">        
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Frecuencia de buses:
                    <div>
                    <samp style="color:#000000;"><?php echo $R[3] ?></samp</label>
                    </div>
                </div>
        </div>
        <hr>
        <div class="row">                
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Precio a pagar:
                    <div>
                    <samp style="color:#000000;"> $ <?php echo $R[4] ?></samp></label>
                    </div>
                </div>  
        </div>
        <hr>
        <div class="row">                
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Horario Rutas:
                    <div>
                    <samp style="color:#000000;"><?php echo $R[6] ?></samp</label>
                    </div>
                </div>
        </div>
        <hr>
        <div class="row">                
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Precio general:
                    <div>
                    <samp style="color:#000000;"> $ <?php echo $R[7] ?></samp</label>
                    </div>
                </div>  
        </div>
        <hr>
        <div class="row">                
                <div class="col-md-12">
                    <label style="color:#1C7CC8; font-family: inherit; font-size: 18px;">Nombre Ruta:
                    <div>
                    <samp style="color:#000000;"><?php echo $R[8] ?></samp</label>
                    </div>
                </div>                 
        </div>        
        </div>
        </div>
        </div>
        <hr>
    </div>
    <?php } ?>
<?php } ?>
    <div class="modal fade" id="exampleModalPQR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background:#B2BFD4;">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Sus PQRS Son</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">  

        <?php foreach ($PQRS as $A) { ?>
        <div id="Activa" class="Activa"><input class="form-control " type="text" value="<?php echo $A[9]; ?>  Click para más"  readonly> </div>
        <div id="Dato" class="Dato">
                <div class="jumbotron text-center"  style="background: #F4FBFF;">
                <div class="container">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tipo</label>
                <div class="col-sm-9">
                <input type="text" name="Tipo" value="<?php echo $A[2]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-9">
                <input type="text" name="Nombre" value="<?php echo $A[1]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mensaje</label>
                <div class="col-sm-9">
                <textarea type="text" name="Mensaje" value="" class="form-control" readonly><?php echo $A[3]; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Fecha Respuesta</label>
                <div class="col-sm-9">
                <input type="text" name="FechaRespuesta" value="<?php echo $A[5]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Respuesta</label>
                <div class="col-sm-9">
                <textarea type="text" name="Respuesta" value="" class="form-control" readonly><?php echo $A[6]; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Evidencia</label>
                <div class="col-sm-9">
                <img  src="Evidencias/<?php echo $A[7]; ?>" style="width: 150px; height: 140px;" readonly>
                </div>
            </div>            

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Administrador</label>
                <div class="col-sm-9">
                <input type="text" name="Administrador" value="<?php echo $A[8]; ?>" class="form-control" readonly>
                </div>
            </div>  
 

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Dirigida</label>
                <div class="col-sm-9">
                <input type="text" name="Dirigida" value="<?php echo $A[10]; ?>" class="form-control" readonly>
                </div>
            </div> 

                   </div>
                </div>                           
            </div>
            <?php } ?>

        </div>
        <div class="modal-footer" style="background:#B2BFD4;">
            <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                 
        </div>
      </div>         
    </div>
  </div>







 <form action="" method="POST">
    <div class="modal fade" id="exampleModalActual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background:#40A5F5;">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar Contraseña</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Clave nueva</label>
                <div class="col-sm-6">
                <input type="password" name="Nueva" placeholder="Digite su Clave nueva" class="form-control">
                </div>
            </div>   

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Confirmar clave</label>
                <div class="col-sm-6">
                <input type="password" name="Confirmacion"  placeholder="Digite su Confirmar clave" class="form-control">
                </div>
            </div>
            <input type="hidden" name="Correo"  value="<?php echo  $Correo  ?>" class="form-control">

            </div>
        <div class="modal-footer" style="background:#40A5F5;">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
            <button type="submit" name="ActualizarContra" class="btn btn-success">Actualizar Clave</button>
          
        </div>
      </div>         
    </div>
  </div>
</form>


<form action="" method="POST"  enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background:#40A5F5;">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizacion de Datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">   
            <?php foreach ($data as $A) { ?>
            
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-6">
                <input type="text" name="Correo"  value="<?php echo $A[0]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombres</label>
                <div class="col-sm-6">
                <input type="text" name="Nombres" value="<?php echo $A[1]; ?>" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apellidos</label>
                <div class="col-sm-6">
                <input type="text" name="Apellidos"  value="<?php echo $A[2]; ?>" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                <input type="text" name="Telefono"  value="<?php echo $A[3]; ?>" class="form-control">

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Sexo</label>
                <div class="col-sm-6">
                <select name="Sexo" class="form-control">
                    <option value="<?php echo $A[4]; ?>"><?php echo $A[4]; ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Actualizar Foto</label>
                <div class="col-sm-6">
                <input type="file" name="imga" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>

            <?php } ?>
        </div>
        <div class="modal-footer" style="background:#40A5F5;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
        <Button type="submit" name="Actualiza" class="btn btn-success">Actualizar</Button>
          
        </div>
      </div>         
    </div>
  </div>
</form>                
<script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/Datos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c044230bd1.js" crossorigin="anonymous"></script>


</body>

</html>