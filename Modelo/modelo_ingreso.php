<?php 

if($_POST['accion'] == 'crear'){

    
  require_once('conexion.php');
  $matricula = filter_var($_POST['matricula'], FILTER_SANITIZE_STRING);
  $tipoV = filter_var($_POST['TipoAuto'], FILTER_SANITIZE_STRING);
  date_default_timezone_set("America/Bogota");
  $hoy= date("Y-m-d h:i:s");
 

  try{
    $stmt = $conn->prepare("INSERT INTO ingresos (matricula,tipoV,FechaIngreso)  VALUES (?,?,?) ");
    $stmt->bind_param("sss",$matricula,$tipoV,$hoy);
    $stmt->execute();
    /* $respuesta = array(
        'respuesta' => $stmt->error_list,
        'error' => $stmt->error
    ); */
    if($stmt->affected_rows == 1){
        $respuesta = array(
            'respuesta' => 'correcto',
            'datos' => array(
                'matricula' => $matricula,
                'tipoV' => $tipoV,
                'ingreso' => $hoy
            )
        );
    }
    $stmt->close();
    $conn->close();
    
    
    }catch(Expetion $e){
        $respuesta = array(
            'error' => 'algo salió mal'
        );
    }
    echo json_encode($respuesta);

}else{
    $respuesta = array(
        'error' => 'algo salió mal2'
    );
}

?>