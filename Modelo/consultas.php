<?php 
function obtenerIngresos(){
    include 'conexion.php';
    try{
        return $conn->query("SELECT NumRegistro, matricula, tipoV, FechaIngreso FROM ingresos");
    }catch(Exception $e){
        echo "error!!". $e->getMessage() ."<br>";
        return false;
    }
}

function EliminarVehiculo($id){
    include 'conexion.php';
    try{
        return $conn->query("DELETE FROM ingresos WHERE NumRegistro = $id");
    }catch(Exception $e){
        echo "error!!". $e->getMessage() ."<br>";
        return false;
    }
}

function llenarRegistroPermante($matricula, $tipo, $FechaIngreso, $FechaSalida){
    include 'conexion.php';
    try{
        return $conn->query("INSERT INTO registros  (`matricula`, `fechaingreso`, `fechasalida`, `tipo`) VALUES ('$matricula','$FechaIngreso', '$FechaSalida', '$tipo')");
    }catch(Exception $e){
        echo "error!!". $e->getMessage() ."<br>";
        return false;
    }
}

function RegistroPermanente(){
    include 'conexion.php';
    try{
        return $conn->query("SELECT matricula, fechaingreso, fechasalida, tipo FROM registros");
    }catch(Exception $e){
        echo "error!!". $e->getMessage() ."<br>";
        return false;
    }
}

?>