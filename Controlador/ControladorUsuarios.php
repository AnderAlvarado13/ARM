<?php
    require_once('Modelo/ModeloUsuarios.php');
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
    if (isset($_POST['todos'])) {
        $Usuarios=$USU->Todos();
    }
    if (isset($_POST['Consultar'])) {
        $Varr=$_POST['Varr'];
        $Usuarios=$USU->Consulta($Varr); 
    }   
    if(isset($_POST['ActualizarContra'])){
       $Correo=$_POST['Correo'];
       $Nueva=$_POST['Nueva'];
       $Confirmacion=$_POST['Confirmacion'];

       if($Confirmacion == $Nueva){
        $resput=$USU->ActualizarContra($Correo,$Nueva);
          if($resput>0){
            echo "
            <script>
            alert('Contraseña Actualizada,  Correctamente');
            </script> 
            ";            
          }else{
            echo "
            <script>
            alert('No se logro actualizar tu contraseña');
            </script> 
            ";             
          }

       }else{
         echo "<script type='text/javascript'>alert('Error Confirmacion, Incorreta');</script> ";
       }
    }
    


    if(isset($_POST['insert'])){

        $Co=$_POST['Correo'];
        $N=$_POST['Nombre'];
        $A=$_POST['Apellido'];
        $C=$_POST['Contra'];
        $R=$_POST['Rol'];
        $E=$_POST['Estado'];

      $resp=$USU->Insertar($Co,$N,$A,$C,$R,$E);
      if($resp>0){
        echo "
        <script>
        alert('Se Inserto correctamente el Usuario');
        </script> 
        ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro  Registrar el Usuario');</script> ";
      }
    }


    if(isset($_POST['actualizar'])){
      $codigo=$_POST['Codigo'];
      $data=$USU->Consulta($codigo);

    }
    if(isset($_POST['Actualiza'])){
      
      $Co=$_POST['Correo'];
      $N=$_POST['Nombre'];
      $A=$_POST['Apellido'];
      $C=$_POST['Contra'];
      $R=$_POST['Rol'];
      $E=$_POST['Estado'];

      $result=$USU->Actualizar($Co,$N,$A,$C,$R,$E);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Actualizados');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro  Actulizar Datos');</script> ";
      }
    }

    if(isset($_POST['elimina'])){
      
      $cod=$_POST['Codigo'];


      $result=$USU->Eliminar($cod);
      if($result>0){
        echo "<script type='text/javascript'>alert('Datos Eliminado con Exito');</script> ";
      }
      else{
        echo "<script type='text/javascript'>alert('No se logro Eliminar los Datos');</script> ";
      }
    }   

    require_once('Vista/VistaUsuarios.php');
    }else{
     echo "<script type=\"text/javascript\"> alert('Su Usuario  no ha sido auntenticado, Tienes que ser Administrador'); self.location ='Login.php';</script>";
    }
?>    