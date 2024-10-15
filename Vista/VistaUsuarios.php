<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Administrador| ARM</title>
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
        <h3 class="font-weight-bold mb-0">ADMIN<span style="color: dodgerblue">ARM</span></h3>
      </div>
      <div class="menu list-group-flush">
        <a href="Usuarios.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-user-tie"></i>  Usuarios</a>
        <a href="Perfil.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-user-tag"></i> Datos Personales</a>
        <a href="Representante.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-user-secret"></i> Representantes</a>
        <a href="Empresa.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-house-user"></i> Empresas</a>
        <a href="Ruta.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-car"></i> Rutas</a>
        <a href="Trayecto.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-road"></i>Trayectos</a><hr>    
        <a href="PQRS.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">
        <i class="fas fa-thumbtack"></i> PQRS</a>          
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
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $Correo ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"><i class="fas fa-user-circle"></i> <?php echo $Nombre ?> <?php echo $Apellido ?></a>
                  <a class="dropdown-item"><i class="fas fa-hashtag"></i> <?php echo $Rol ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModalActual" ><i class="fas fa-user-shield"></i>Actualizar Contraseña</a>
                </div>
              </li>
              <li>
                  <form action="Login.php" method="POST">
                      <button type="submit" name="Cierra" class="btn btn-primary text-primary" id="menu-toggle">
                          <i class="fas fa-power-off"> Salir</i></button>
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
            <h2 class="display-3" style="color: #000000;">
            <i class="fas fa-user-tie"></i> - USUARIOS</h2><hr>
            <p class="lead">Aplicacion de rutas municipales | Administra los usuarios</p>
          </div>
        </div>  
        <div class="btn-schear">
            <form action="" method="POST">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Busca por Correo:</label>
                <div class="col-sm-8">
                  <input type="search" name="Varr" class="form-control form-control-sm" placeholder="tucorreoejemplo@gmail.com.co / Ejemplotucorreo@gmail.com.co">
                </div>
                <div class="col-sm-1">
                    <button type="submit" name="Consultar" class="btn btn-dark btn-sm">Buscar <i class="fas fa-search"></i></button>
                </div>
            </div>
            </form>
                <div class="form-group row">
                <form action="" method="POST">
                    <div class="col-sm-2">
                        <!-- <button type="button"  id="Btn_datos" class="btn btn-info btn-sm"><i class="fas fa-database"></i> Consultar Datos </button> -->
                        <button type="submit"  name="todos" class="btn btn-info btn-sm"><i class="fas fa-database"></i> Consultar Datos </button>
                    </div>
                </form>    
                    <div class="col-sm-1">
                        
                    </div>
                <form action="" method="POST">                       
                    <div class="col-sm-2">
                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm">
                            <i class="fas fa-address-card"></i> Inserta un dato</button>
                    </div>
                </form>
                </div>
                      
        </div>      


 
<?php if(isset($_POST['todos']) or isset($_POST['Consultar'])){  ?>
        <div class="table-responsive">
            <!--Table-->
            <table class="table table-striped">
            <tr>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Clave</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
            <?php foreach($Usuarios as $A){?>
            <tr>
                <td><?php echo $A[0]; ?></td>
                <td><?php echo $A[1]; ?></td>
                <td><?php echo $A[2]; ?></td>
                <td><?php echo $A[3]; ?></td>
                <td><?php echo $A[4]; ?></td>
                <td><?php echo $A[5]; ?></td>
                <td>    <form action="" method="POST">
                            <input type="hidden" name="Codigo" value="<?php echo $A[0]; ?>">
                            <button class="btn btn-success" type="submit" name="actualizar">
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


<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background:#40A5F5;">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Inserta un Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">  

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-6">
                <input type="email" name="Correo" placeholder="Digite su Correo" class="form-control">
                </div>
            </div>   

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" name="Nombre"  placeholder="Digite su Nombre" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apellido</label>
                <div class="col-sm-6">
                <input type="text" name="Apellido" placeholder="Digite su Apellido" class="form-control">
                </div>
            </div>   

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Contraseña</label>
                <div class="col-sm-6">
                <input type="text" name="Contra" placeholder="Digite su Contraseña" class="form-control">
                </div>
            </div>                                       

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Rol</label>
                <div class="col-sm-6">
                <select name="Rol" class="form-control">
                    <option value="Pasajero">Pasajero</option>
                    <option value="Representante">Representante</option>
                    <option value="Administrador">Administrador</option>
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

            </div>
        <div class="modal-footer" style="background:#40A5F5;">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
            <button type="submit" name="insert"class="btn btn-warning">Insertar</button>
          
        </div>
      </div>         
    </div>
  </div>
</form>



<?php if (isset($_POST['actualizar'])) { ?>
    <div class="jumbotron text-center"  style="background: #F4FBFF;">
          <div class="container itens-center">      
        <form action="" method="POST">
            <?php foreach ($data as $A) { ?>
                <div class="AcDat" ><h3>Actualizacion de Datos</h3></div><br>
            
            <div class="form-group row">        
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-5">
                <input type="text" name="Correo" value="<?php echo $A[0]; ?>" class="form-control" readonly>
                </div>
            </div> 
               

            <div class="form-group row">        
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-5">
                <input type="text" name="Nombre" value="<?php echo $A[1]; ?>" class="form-control">
                </div>
            </div> 

            <div class="form-group row">        
                <label class="col-sm-3 col-form-label">Apellido</label>
                <div class="col-sm-5">
                <input type="text" name="Apellido" value="<?php echo $A[2]; ?>" class="form-control">
                </div>
            </div> 

            <div class="form-group row">        
                <label class="col-sm-3 col-form-label">Contraseña</label>
                <div class="col-sm-5">
                <input type="text" name="Contra" value="<?php echo $A[3]; ?>" class="form-control">
                </div>
            </div> 
            
            <div class="form-group row">        
                <label class="col-sm-3 col-form-label">Rol</label>
                <div class="col-sm-5">
                <select name="Rol" class="form-control">
                    <option value="<?php echo $A[4]; ?>"><?php echo $A[4]; ?></option>
                    <option value="Pasajero">Pasajero</option>
                    <option value="Representante">Representante</option>
                    <option value="Administrador">Administrador</option>
                </select>
                </div>
            </div>            

            <div class="form-group row">        
                <label class="col-sm-3 col-form-label">Estado</label>
                <div class="col-sm-5">
                <select name="Estado" class="form-control">
                    <option value="<?php echo $A[5]; ?>"><?php echo $A[5]; ?></option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                </div>
            </div> 
                <button type="button" class="btn btn-danger" onclick=' location.href="Usuarios.php" '>Cerrar</button>
                <Button type="submit" name="Actualiza" class="btn btn-success">Actualizar</Button>
            <?php } ?>
        </form>
        </div>
</div>         
    <?php } ?>
 


    <footer class="container">
            <p class="float-right">&copy; 2020 |ARM| &copy; A.A_J.D.B</p>
        </footer>
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
