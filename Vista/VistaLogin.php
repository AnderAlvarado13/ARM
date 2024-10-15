<!DOCTYPE html>
<html>
<head>
	<title>ARM | Ingresar</title>
	<link rel="stylesheet" type="text/css" href="Css/Ingreso.css">
	<link rel="stylesheet" href="Css/Nav.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<header class="header">
        <div class="skew-abajo"></div>
        <nav class="menu">
            <div class="logo-box">
                <h1><a href="index.php"><img src="img/Icono nav.png" alt=""></a></h1>
                <span class="btn-menu"><i class="fa fa-bars"></i></span>
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

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/Personalizacion.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/Logo con alas.svg">
				<h2 class="title">Bienvenido a ARM</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Digite su correo</h5>
           		   		<input type="text" class="input" name="Correo">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Digite su contraseña</h5>
           		    	<input type="password" class="input" name="Contra">
            	   </div>
            	</div>
				<a href="Registro.php">REGISTRATE</a>
            	
				<input type="submit" name="LogueoBTN" class="btn" value="Login">
				
            </form>
        </div>
    </div>
	<script type="text/javascript" src="./js/Ingreso.js"></script>
	<script src="https://kit.fontawesome.com/c044230bd1.js" crossorigin="anonymous"></script>
<script src="js/app.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>