<!DOCTYPE html>
<html lang="en">

<head><meta charset="euc-jp">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Representante | ARM  | <?php echo $Nombre ?> <?php echo $Apellido ?></title>
  <!-- Bootstrap Css -->
  <link href="admin/css/bootstrap.min.css" rel="stylesheet">

  <!-- Hoja de estilos -->
  <link href="admin/css/styles.css" rel="stylesheet">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/icono.png" type="image/x-icon"> 
</head>

<body>

  <div class="d-flex" id="content-wrapper">

    <!-- Sidebar -->
    <div id="sidebar-container" class="bg-light border-right">
      <div class="logo">
        <h3 class="font-weight-bold mb-0">REPRESEN<span style="color: dodgerblue">TANTE</span></h3><hr>
      </div>
      <div class="menu list-group-flush">
        <a class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-pen-nib"></i> CORREO:</a>
        <a class="list-group-item list-group-item-action text-muted bg-light p-2 border-0">
        <i class="fas fa-angle-double-right"></i> <?php echo $CorreoR ?></a><hr>
        <a class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-pen-nib"></i> NOMBRE:</a>
        <a class="list-group-item list-group-item-action text-muted bg-light p-2 border-0">
        <i class="fas fa-angle-double-right"></i> <?php echo $NombreR ?></a><hr> 
        <a class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-pen-nib"></i> APELLIDO:</a>               
        <a class="list-group-item list-group-item-action text-muted bg-light p-2 border-0">
        <i class="fas fa-angle-double-right"></i> <?php echo $ApellidoR ?></a> <hr> 
        <a class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-pen-nib"></i> TELEFONO:</a>    
        <a class="list-group-item list-group-item-action text-muted bg-light p-2 border-0">
        <i class="fas fa-angle-double-right"></i> <?php echo $TelefonoR ?></a> <hr>               
      </div>
    </div>
    <!-- Fin sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="w-100 bg-light-blue">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
          <button class="btn btn-primary text-primary" id="menu-toggle"><i class="fas fa-align-justify"></i></button>
 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link text-dark" href="index.php">Inicio</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-dark" href="RepresentanteV2.php">Actualizar</a>
              </li>              
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $Correo ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"><i class="fas fa-user-circle"></i> <?php echo $Nombre ?> <?php echo $Apellido ?></a>
                  <a class="dropdown-item"><i class="fas fa-hashtag"></i> <?php echo $Rol ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalActual"><i class="fas fa-user-shield"></i> Actualizar Contraseña</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-edit"></i> Editar Perfil</a>
                </div>
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

      <div id="content" class="container-fluid p-5">
        <section class="py-3">
        <div class="jumbotron text-center"  style="background: #F4FBFF;">
          <div class="container">
            <h4 class="display-3" style="color: #000000;">
            <i class="fas fa-user-secret"></i> - REPRESENTANTE</h4><hr>
            <p class="lead"> Gestiona tu Empresa y  Rutas para tener mayor eficiencia para nuestros Pasajeros</p>
          </div>
        </div>  
        <div class="btn-schear">
            <form action="" method="POST">
                <div class="form-group row">
                <div class="col-sm-2">
                    <button type="button" data-toggle="modal" data-target="#exampleModalEmpresa" class="btn btn-warning btn-sm"><i class="fas fa-address-card"></i> Inserta Tu Empresa</button>
                </div>                  
                <div class="col-sm-2">
                    <button type="submit"  name="Empresa" class="btn btn-info btn-sm"><i class="fas fa-house-user"></i> Consulta Empresas</button>
                </div>
                <div class="col-sm-1">
                </div>
                    <div class="col-sm-2">
                    <button type="button"  class="btn btn-info btn-sm Btn_datos"><i class="fas fa-database"></i> Consultar PQRS</button>   
                    </div>
                    <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                    <button type="button"data-toggle="modal" data-target="#exampleModalRutas" class="btn btn-warning btn-sm"><i class="fas fa-address-card"></i> Inserta Tus Rutas</button>
                </div>                       
                <div class="col-sm-2">
                    <button type="submit"  name="Rutas" class="btn btn-info btn-sm"><i class="fas fa-car"></i> Consulta Rutas</button>
                </div>                                                          

                </div>
            </form>          
        </div>      

        <?php if(isset($_POST['Empresa'])){  ?>
        <div class="table-responsive">
            <!--Table-->
            <table class="table table-striped">
            <tr>
                <th>Representante</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Nit</th>
                <th>Logo</th>
                <th>Actualizar</th>
            </tr>
            <?php foreach($Empresa as $A){ ?>
                <tr>
                    <td><?php echo $A[0]; ?></td>
                    <td><?php echo $A[1]; ?></td>
                    <td><?php echo $A[2]; ?></td>
                    <td><?php echo $A[3]; ?></td>
                    <td><?php echo $A[4]; ?></td>
                    <td><img src="Informacion/<?php echo $A[5]; ?>" width="35px" height="35px"></td>
                    <td>    <form action="" method="POST">
                            <input type="hidden" name="Codigo" value="<?php echo $A[0]; ?>">
                            <button class="btn btn-success" type="submit" name="actualizar">
                            <i class="fas fa-user-edit"></i></button></td>
               
            </tr>
            <?php } ?>
            </table>

        </div>            
<?php } ?>

<?php if(isset($_POST['Rutas'])){  ?>
        <div class="table-responsive">
            <!--Table-->
            <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Horario</th>
                <th>Precio</th>
                <th>Nombre Ruta</th>
                <th>Empresa</th>
                <th>Estado</th>
                <th>Tablilla</th>
                <th>Bus</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
            <?php foreach($Ruta as $A){ ?>
                <tr>
                    <td><?php echo $A[0]; ?></td>
                    <td><?php echo $A[1]; ?></td>
                    <td><?php echo $A[2]; ?></td>
                    <td><?php echo $A[3]; ?></td>
                    <td><?php echo $A[4]; ?></td>
                    <td><?php echo $A[5]; ?></td>
                    <td><img src="Informacion/<?php echo $A[6]; ?>" width="35px" height="35px"></td>
                    <td><img src="Informacion/<?php echo $A[7]; ?>" width="35px" height="35px"></td>
                    <td>    <form action="" method="POST">
                            <input type="hidden" name="Codigo" value="<?php echo $A[0]; ?>">
                            <button class="btn btn-success" type="submit" name="actualizarRu">
                            <i class="fas fa-user-edit"></i></button></td>
                    <td>
                            <button class="btn btn-danger" type="submit" name="elimina" value="Eliminar" onclick="return ConfimoDelete()">
                            <i class="fas fa-user-alt-slash"></i>
                        </form></td>                
            </tr>
            <?php } ?>
            </table>
        </div>            
<?php } ?> 

<?php foreach ($PQRS as $A) { ?>
        <?php if($A[10]=="Representante"){?>
            <div id="Activa" class="Activa"><input class="form-control " type="text" value="<?php echo $A[9]; ?>"  readonly></div>
        <div id="Dato" class="Dato">
                <div class="jumbotron text-center"  style="background: #F4FBFF;">
                <div class="container">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID: </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" name="ID" value="<?php echo $A[0]; ?>" readonly>
                </div>
            </div>                

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tipo</label>
                <div class="col-sm-6">
                <input type="text" name="Tipo" value="<?php echo $A[1]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre" value="<?php echo $A[2]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mensaje</label>
                <div class="col-sm-6">
                <textarea type="text" name="Mensaje" value="" class="form-control" readonly><?php echo $A[3]; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Fecha Envio</label>
                <div class="col-sm-6">
                <input type="text" name="FechaEnvio" value="<?php echo $A[4]; ?>" class="form-control" readonly> 
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Fecha Respuesta</label>
                <div class="col-sm-6">
                <input type="text" name="FechaRespuesta" value="<?php echo $A[5]; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Respuesta</label>
                <div class="col-sm-6">
                <textarea type="text" name="Respuesta" value="" class="form-control" readonly><?php echo $A[6]; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Evidencia</label>
                <div class="col-sm-6">
                <img  src="Evidencias/<?php echo $A[7]; ?>" style="width: 150px; height: 140px;" readonly>
                </div>
            </div>            

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Administrador</label>
                <div class="col-sm-6">
                <input type="text" name="Administrador" value="<?php echo $A[8]; ?>" class="form-control" readonly>
                </div>
            </div>  
 
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Correo</label>
                <div class="col-sm-6">
                <input type="text" name="Correo" value="<?php echo $A[9]; ?>" class="form-control" readonly>
                </div>
            </div> 

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Dirigida</label>
                <div class="col-sm-6">
                <input type="text" name="Dirigida" value="<?php echo $A[10]; ?>" class="form-control" readonly>
                </div>
            </div> 

                    
                        <form action="" method="POST">
                            <input type="hidden" name="Codigo" value="<?php echo $A[0]; ?>">
                            <button class="btn btn-warning" type="submit" name="actualizarPQR">
                            Responde esta PQRS</button>

<!--                             <button class="btn btn-danger" type="submit" name="elimina" value="Eliminar" onclick="return ConfimoDelete()">
                            <i class="fas fa-user-alt-slash"></i> -->
                        </form>
                   </div>
                </div>                           
            </div>
            <?php } ?>
            <?php } ?>


<?php if (isset($_POST['actualizarPQR'])) { ?>
    <div class="jumbotron text-center"  style="background: #F4FBFF;">
          <div class="container itens-center">      
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach ($dataPQR as $A) { ?>
              <?php if($A[10]=="Representante"){?>
                <div class="AcDat" ><h3>Respondiendo la PQRS de</h3></div> 
                <h3><?php echo $A[9]; ?></h3>


                <input class="form-control" type="hidden" name="ID" value="<?php echo $A[0]; ?>">

                <input type="hidden" name="Nombre" value="<?php echo $A[1]; ?>" class="form-control">

                <input type="hidden" name="Tipo" value="<?php echo $A[2]; ?>" class="form-control">


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mensaje</label>
                <div class="col-sm-6">
                <textarea  name="Mensaje" value="<?php echo $A[3]; ?>" class="form-control" readonly><?php echo $A[3]; ?></textarea>
                </div>
            </div>

                <input type="hidden" name="FechaEnvio" value="<?php echo $A[4]; ?>" class="form-control">

                <input type="hidden" name="FechaRespuesta" value="<?php echo $A[5]; ?>" class="form-control">


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Respuesta</label>
                <div class="col-sm-6">
                <textarea type="text" name="Respuesta" value="<?php echo $A[6]; ?>" class="form-control"><?php echo $A[6]; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Evidencia</label>
                <div class="col-sm-6">
                <input type="hidden" name="Evidencia" value="<?php echo $A[7]; ?>" >
                <img  src="Evidencias/<?php echo $A[7]; ?>" style="width: 150px; height: 140px;" readonly>
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Administrador</label>
                <div class="col-sm-6">
                <input type="text" name="Administrador" value="<?php echo $Correo ?>" class="form-control">
                </div>
            </div>  

                <input type="hidden" name="Correo" value="<?php echo $A[9]; ?>" class="form-control">

                <input type="hidden" name="Dirigida" value="<?php echo $A[10]; ?>" class="form-control">

                <button type="button" class="btn btn-danger" onclick=' location.href="RepresentanteV2.php" '>Cancelar</button>
                <Button type="submit" name="ActualizaPQR" class="btn btn-warning">Responder PQRS</Button>
            <?php } ?>
            <?php } ?>
        </form>
        </div>
</div>         
<?php } ?>



<form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalRutas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background:#40A5F5;">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Inserta un Rutas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">  
                
        <div class="form-group row">
                <label class="col-sm-3 col-form-label">Horarios</label>
                <div class="col-sm-6">
                <input type="text" name="Horarios" placeholder="Digite su Horarios" class="form-control">
                </div>
            </div>         
        
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Precio Ruta</label>
                <div class="col-sm-6">
                <input type="text" name="Precio" placeholder="Digite su Precio" class="form-control">
                </div>
            </div>               
                
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre de la ruta</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre" placeholder="Digite su Nombre" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Empresa</label>
                <div class="col-sm-6">
                <select name="Empresa" class="form-control">
                    <?php foreach ($Empresa as $e){ ?>
                    <option  value="<?php echo $e[0];?>"> <?php echo $e[1];?></option> 
                    <?php } ?>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Estado</label>
                <div class="col-sm-6">
                <select name="Estado" class="form-control">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tablilla de Ruta</label>
                <div class="col-sm-6">
                <input type="file" name="Tablill" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Aspecto Bus</label>
                <div class="col-sm-6">
                <input type="file" name="Bu" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>
 
                </div>
        <div class="modal-footer" style="background:#40A5F5;">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
            <button type="submit" name="insertRU"class="btn btn-warning">Insertar</button>
          
        </div>
      </div>         
    </div>
  </div>
</form>

<?php if (isset($_POST['actualizarRu'])) { ?>
    <div class="jumbotron text-center"  style="background: #F4FBFF;">
          <div class="container itens-center">      
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach ($datar as $A) { ?>
                <div class="AcDat" ><h3>Actualizacion de Datos</h3></div><br>
            
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID: </label>
                <div class="col-sm-6">
                <input class="form-control" type="hidden" name="ID" value="<?php echo $A[0]; ?>" class="form-control">
                <label><?php echo $A[0]; ?></label>
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Horarios</label>
                <div class="col-sm-6">
                <input type="text" name="Horarios" value="<?php echo $A[1]; ?>" class="form-control">
                </div>
            </div>         
        
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Precio Ruta</label>
                <div class="col-sm-6">
                <input type="text" name="Precio" value="<?php echo $A[2]; ?>" class="form-control">
                </div>
            </div> 

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre" value="<?php echo $A[3]; ?>" class="form-control">
                </div>
            </div>


                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Empresa</label>
                <div class="col-sm-6">
                <input type="text" name="Empresa" value="<?php echo $A[4]; ?>" class="form-control">
                </div>
            </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Estado</label>
                <div class="col-sm-6">
                <select name="Estado" class="form-control">
                    <option value="<?php echo $A[5]; ?>"><?php echo $A[5]; ?></option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tablilla de Ruta</label>
                <div class="col-sm-6">
                <input type="file" name="Tablilla" value="<?php echo $A[6]; ?>" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Aspecto Bus</label>
                <div class="col-sm-6">
                <input type="file" name="Bus" lang="es" value="<?php echo $A[7]; ?>" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>  

                <button type="button" class="btn btn-danger" onclick=' location.href="RepresentanteV2.php" '>Cerrar</button>
                <Button type="submit" name="ActualizaRu" class="btn btn-success">Actualizar</Button>
            <?php } ?>
        </form>
        </div>
</div> 
<?php } ?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background:#40A5F5;">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Inserta una Empresa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">  

        <div class="form-group row" >
                <label class="col-sm-3 col-form-label">Representante</label>
                <div class="col-sm-6">
                <select name="ID" class="form-control">
                    <?php foreach ($Repre as $r){ ?>
                    <option  value="<?php echo $r[0];?>"> <?php echo $r[1];?></option> 
                    <?php } ?>
                </select>
                </div>
            </div>   
                
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre" placeholder="Digite su Nombre" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Direccion</label>
                <div class="col-sm-6">
                <input type="text" name="Direccion" placeholder="Digite su Direccion" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                <input type="text" name="Telefono" placeholder="Digite su Telefono" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nit</label>
                <div class="col-sm-6">
                <input type="text" name="Nit" placeholder="Digite su Nit" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Logo</label>
                <div class="col-sm-6">
                <input type="file" name="Logo" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>


                </div>
        <div class="modal-footer" style="background:#40A5F5;">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
            <button type="submit" name="insertEmp" class="btn btn-warning">Insertar</button>
          
        </div>
      </div>         
    </div>
  </div>
</form>


<?php if (isset($_POST['actualizar'])) { ?>
    <div class="jumbotron text-center"  style="background: #F4FBFF;">
          <div class="container itens-center">      
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach ($datas as $A) { ?>
                <div class="AcDat" ><h3>Actualizacion de Datos</h3></div><br>
            
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID: </label>
                <div class="col-sm-6">
                <input class="form-control" type="hidden" name="ID" value="<?php echo $A[0]; ?>" class="form-control">
                <label><?php echo $A[0]; ?></label>
                </div>
            </div>                

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre" value="<?php echo $A[1]; ?>" class="form-control">
                </div>
            </div>  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Direccion</label>
                <div class="col-sm-6">
                <input type="text" name="Direccion" value="<?php echo $A[2]; ?>" class="form-control">
                </div>
            </div>  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                <input type="text" name="Telefono" value="<?php echo $A[3]; ?>" class="form-control">
                </div>
            </div>  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nit</label>
                <div class="col-sm-6">
                <input type="text" name="Nit" value="<?php echo $A[4]; ?>" class="form-control">
                </div>
            </div> 

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Logo</label>
                <div class="col-sm-6">
                <input type="file" name="Logo" value="<?php echo $A[5]; ?>" lang="es" accept="image/jpeg, image/jpg, image/gif, image/png, application/pdf">
                </div>
            </div>
                <button type="button" class="btn btn-danger" onclick=' location.href="RepresentanteV2.php" '>Cerrar</button>
                <Button type="submit" name="ActualizaEmp" class="btn btn-success">Actualizar</Button>
            <?php } ?>
        </form>
        </div>
</div>         
<?php } ?> 

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
                <label class="col-sm-3 col-form-label">ID: </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" name="ID" value="<?php echo $A[0]; ?>" readonly>
                </div>
            </div>                

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Correo: </label>
                <div class="col-sm-6">
                <input class="form-control" type="text" name="Correo" value="<?php echo $A[1]; ?>" readonly>

                </div>
            </div>  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre" value="<?php echo $A[2]; ?>" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apellido</label>
                <div class="col-sm-6">
                <input type="text" name="Apellido" value="<?php echo $A[3]; ?>" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                <input type="text" name="Telefono" value="<?php echo $A[4]; ?>" class="form-control">
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
        </section>
      </div>
    </div>
    <!-- Fin Page Content -->
  </div>
  <!-- Fin wrapper -->

  <!-- Bootstrap y JQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/Datos.js"></script>
  <script src="admin/js/jquery.js"></script>
  <script src="admin/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/c044230bd1.js" crossorigin="anonymous"></script>
  <!-- Abrir / cerrar menu -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });
  </script>
    <script type="text/javascript">
        function ConfimoDelete() {
            var respuesta = confirm("Esta seguro que desea Eliminar los datos");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>
