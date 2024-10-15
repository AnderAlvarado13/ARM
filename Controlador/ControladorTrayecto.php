<?php
    require_once('Modelo/ModeloTrayecto.php');
    require_once('Modelo/ModeloRuta.php');
    require_once('Modelo/ModeloEmpresa.php');

    $RUT=new ModeloRuta();
    $EMP=new ModeloEmpresa();

    $TRA=new ModeloTrayecto();
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
        $Trayecto=$TRA->Todos();
    }
    if (isset($_POST['Consultar'])) {
        $Varr=$_POST['Varr'];
        $Trayecto=$TRA->Consulta($Varr); 
    }  
    $Ruta=$RUT->Todos();
    $Empresa=$EMP->Todos();
    if(isset($_POST['insert'])){

        $N=$_POST['Nombre'];
        $D=$_POST['Duracion'];
        $F=$_POST['Frecuencia'];
        $P=$_POST['Precio'];
        $S=$_POST['Salida'];
        $L=$_POST['Llegada'];
        $adjunto=$_FILES['Mapa']['name'];
        $tipos=$_FILES['Mapa']['type'];
        $tam=$_FILES['Mapa']['size'];        
        $R=$_POST['Ruta'];
        $E=$_POST['Empresa'];

        if($adjunto!=null){
          if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
            if($tam<=1000000){
              $Sal=$S;
              $adjunto=$Sal."_".$adjunto;
              $carpeta_destino='/home3/arutasm1/public_html/Mapas/';         
              $resp=$TRA->Insertar($N,$D,$F,$P,$S,$L,$adjunto,$R,$E);
              if($resp>0){
                  move_uploaded_file($_FILES['Mapa']['tmp_name'],$carpeta_destino.$adjunto);
                  echo "<script type='text/javascript'>alert('Trayecto Correctamente Ingresado');</script> ";
                }
                else{
                  echo "<script type='text/javascript'>alert('No se inserto el Trayecto');</script> ";
                }
              }else{
                echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
              }
            }else{
              echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
            }
          
      }else{
            $adjunto="Mosquera-Calle13.png";
            $resp=$TRA->Insertar($N,$D,$F,$P,$S,$L,$adjunto,$R,$E);
            if($resp>0){
              
              echo "<script type='text/javascript'>alert('Trayecto Correctamente Ingresado');</script> ";
            }
            else{
              echo "<script type='text/javascript'>alert('No se inserto el Trayecto');</script> ";
            }
          }
  }

    if(isset($_POST['actualizar'])){
      $codigo=$_POST['Codigo'];
      $data=$TRA->Consulta($codigo);

    }
    if(isset($_POST['Actualiza'])){
      
      $I=$_POST['ID'];
      $N=$_POST['Nombre'];
      $D=$_POST['Duracion'];
      $F=$_POST['Frecuencia'];
      $P=$_POST['Precio'];
      $S=$_POST['Salida'];
      $L=$_POST['Llegada'];
      $adjunto=$_FILES['Mapa']['name'];
      $tipos=$_FILES['Mapa']['type'];
      $tam=$_FILES['Mapa']['size'];        
      $R=$_POST['Ruta'];
      $E=$_POST['Empresa'];

      if($adjunto!=null){
        if($tipos == "image/jpeg" ||$tipos == "image/jpg" || $tipos == "image/gif" || $tipos == "image/png" || $tipos == "application/pdf"){
          if($tam<=1000000){
            $Sal=$S;
            $adjunto=$Sal."_".$adjunto;
            $carpeta_destino='/home3/arutasm1/public_html/Mapas/';         
            $resp=$TRA->Actualizar($I,$N,$D,$F,$P,$S,$L,$adjunto,$R,$E);
            if($resp>0){
                move_uploaded_file($_FILES['Mapa']['tmp_name'],$carpeta_destino.$adjunto);
                echo "<script type='text/javascript'>alert('Trayecto Correctamente Ingresado');</script> ";
              }
              else{
                echo "<script type='text/javascript'>alert('No se inserto el Trayecto');</script> ";
              }
            }else{
              echo "<script type='text/javascript'>alert('El Tamaño es muy grande');</script> ";
            }
          }else{
            echo "<script type='text/javascript'>alert('No Cuanta con tipo permitido');</script> ";
          }
        
    }else{
          $adjunto="Mosquera-Calle13.png";
          $resp=$TRA->Actualizar($I,$N,$D,$F,$P,$S,$L,$adjunto,$R,$E);
          if($resp>0){
            
            echo "<script type='text/javascript'>alert('Trayecto Correctamente Ingresado');</script> ";
          }
          else{
            echo "<script type='text/javascript'>alert('No se inserto el Trayecto');</script> ";
          }
        }
}

    if(isset($_POST['elimina'])){
      
      $cod=$_POST['Codigo'];


      $result=$TRA->Eliminar($cod);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Eliminado con Exito');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro Eliminar los Datos');</script> ";
      }
    }  


    require_once('Vista/VistaTrayecto.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }    
?>    