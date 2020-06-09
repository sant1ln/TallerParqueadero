<?php 
include '../Modelo/consultas.php';

    
    $id = $_GET['id'];
    $matricula = $_GET['placa'];
    $tipo = $_GET['tipo'];
    $FechaIngreso = $_GET['ingreso'];
    $retirar = EliminarVehiculo($id);
     if($retirar){
         /* echo "Eliminacion Exitosa" . "<br>"; */
         date_default_timezone_set("America/Bogota");
         $FechaSalida = date("Y-m-d h:i:s");
         // echo $FechaSalida;
         $LlenarRegistro = llenarRegistroPermante($matricula, $tipo, $FechaIngreso, $FechaSalida);
         if($LlenarRegistro){
           
             include '../Vista/RetirarVehiculo.php';
         }
     }
 ?>