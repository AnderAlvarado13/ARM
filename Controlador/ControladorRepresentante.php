<?php
    require_once('Modelo/ModeloRepresentante.php');
    require_once('Modelo/ModeloUsuarios.php');

    $REP=new ModeloRepresentate();
    $USU=new ModeloUsuarios();
    session_start();
    if(!$_SESSION){
      echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado'); self.location ='Login.php';</script>";
    }else{
  
       $Correo= $_SESSION['Correo'];
       $Nombre= $_SESSION['Nombre'];
       $Apellido= $_SESSION['Apellido'];
       $Rol= $_SESSION['Rol'];

    }
    
    if($_SESSION['Rol'] == "Administrador"){       
    if(isset($_POST['todos'])){
        $Repre=$REP->Todos();
    }
    if (isset($_POST['Consultar'])) {
        $Varr=$_POST['Varr'];
        $Repre=$REP->Consulta($Varr); 
    }  
    
    $Usuarios=$USU->Todos();
    if(isset($_POST['insert'])){

        $C=$_POST['Correo'];
        $N=$_POST['Nombre'];
        $A=$_POST['Apellido'];
        $T=$_POST['Telefono'];

      $resp=$REP->Insertar($C,$N,$A,$T);
      if($resp>0){
        echo "<script type='text/javascript'>alert('Representate Nuevo insertado Corectamente');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro  Registrar el Representate');</script> ";
      }
    }

    if(isset($_POST['actualizar'])){
      $codigo=$_POST['Codigo'];
      $data=$REP->Consulta($codigo);
    }

    if(isset($_POST['Actualiza'])){
      
      $I=$_POST['ID'];
      $C=$_POST['Correo'];
      $N=$_POST['Nombre'];
      $A=$_POST['Apellido'];
      $T=$_POST['Telefono'];

      $result=$REP->Actualizar($I,$C,$N,$A,$T);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Actualizados');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro  Actulizar Datos');</script> ";
      }
    }

    if(isset($_POST['elimina'])){
      
      $cod=$_POST['Codigo'];


      $result=$REP->Eliminar($cod);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Eliminado con Exito');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro Eliminar los Datos');</script> ";
      }
    }  

    require_once('Vista/VistaRepresentante.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }      
?>    