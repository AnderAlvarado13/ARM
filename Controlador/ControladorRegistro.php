<?php
    require_once('Modelo/ModeloUsuarios.php');
    require_once('Modelo/ModeloDatosPersonales.php');

    
    $PER=new ModeloPerfil();    
    $USU=new ModeloUsuarios();
       
    if(isset($_POST['REGISTRADO'])){

        $Co=$_POST['Correo'];
        $N=$_POST['Nombre'];
        $A=$_POST['Apellido'];
        $C=$_POST['Contra'];
        $R="Pasajero";
        $E="Activo";
        $T="";
        $S="";
        $F="PER.png";

      $resp=$USU->Insertar($Co,$N,$A,$C,$R,$E);
      $resp=$PER->Insertar($Co,$N,$A,$T,$S,$F);
      if($resp>0){
        echo "<script type='text/javascript'>alert('Nuevo Cuenta Insertada. Gracias');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro  Insertar la Cuenta');</script> ";
      }
    }

    require_once("Vista/VistaRegistro.php");
?>