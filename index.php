<?php include 'header.php';
 include 'Modelo/consultas.php'; ?>
<body class="index">
    <div class="contForm">
        <h2><a href="registro.php">Ir a ingresos</a></h2>
        <div class="ingreso">
        <h1 class="title">Registro Vehiculo</h1>
        <form id="formIngreso" action="#" method="GET">
            <?php 
            $ocupacionTotal = obtenerIngresos();
            if($ocupacionTotal->num_rows){
                $i = 0;
                foreach($ocupacionTotal as $ocupado){
                   $i++;
                }
                
                if($i < 10){?>
                <h4>Cupos Disponibles: <?php echo 10 - $i; ?> </h4>
              <div class="form-d">
                <label for="matricula">Ingrese Matricula</label>
                <input type="text" id="matricula" name="matricula">
              </div>
              <div class="form-d">
                <label for="tipo">Vehiculo</label>
                <select name="tipo" id="tipoV">
                    <option selected disabled>--Selecione Una</option>
                    <option value="AUTO">Auto</option>
                    <option value="MOTO">Moto</option>
                </select>
            </div>
            <div class="form-d">
                <input type="hidden" id="Accion" value="crear">
                <button type="submit" name="submit" class="btn btn-success enviar">Registrar</button>
            </div>
        </form>
             <?php }else { ?>
            <div class="form-d">
                <h1>Parqueadero lleno</h1>
                <h5>Cuando un vehiculo se retire podra ingresar</h5>
            </div>
             <?php }
            }?> 
          
          

            
    </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>