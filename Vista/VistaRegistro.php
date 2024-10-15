<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/stylelog.css">
    <link rel="stylesheet" href="Css/Nav.css">
   
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">

    <title>ARM | Registro</title>
  </head>
    <header class="header">
        <div class="skew-abajo"></div>
        <nav class="menu">
            <div class="logo-box">
                <h1><a href="#"><img src="img/Icono nav.png" alt=""></a></h1>
                <span class="btn-menu"><i class="fas fa-bars"></i></span>
            </div>

            <div class="list-container">
                <ul class="list">
                    <li><a href="index.php" >INICIO</a></li>
                    <li><a href="" class="activo"><img src="img/peq2.png" alt=""></a></li>
                    <li><a href="Nosotros.php">NOSOTROS</a></li>
                    <li><a href="Registro.php">REGISTRATE</a></li>
                    <li><a href="Login.php">INGRESAR</a></li>

                </ul>
            </div>
        </nav>
    </header>  
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Ayudanos a mejorarte el servicio</h3>
                <p class="lead text-light">Esperamos que te logres acomodar a nuestros parametros</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta gratis <a href="#"><img src="img/Icono nav2.png" alt=""></a></h1>
                 
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <form action="" method="POST">
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="Nombre" class="form-control" placeholder="Tu nombre" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" name="Apellido" class="form-control" placeholder="Tu apellido" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" name="Correo" class="form-control" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" name="Contra" class="form-control" placeholder="Ingresa una contraseña" required>
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button class="btn width-100" type="submit" name="REGISTRADO" onclick=' location.href="PQRSV2.php" '>Regístrate</button>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2020 ARM</small>
                </div>
           </div>
       </div>
   </section>
    <script src="https://kit.fontawesome.com/c044230bd1.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>