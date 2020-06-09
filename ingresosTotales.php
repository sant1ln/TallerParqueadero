<?php include 'header.php';
include 'Modelo/consultas.php';  ?>

<body class="regsto">
    
    <div class="registro">
    <h1 class="headerT">XYZPARKING</h1>
        <div class="container">
        <h1 class="title">Ingresos Totales</h1>
        <div class="miniMenu">
            <h2><a href="index.php">Registrar Vehiculo</a></h2>
            <h2><a href="registro.php">Ir a ingresos</a></h2>
            <h3 class="Export" ><i class="far fa-file-excel"></i>Exportar Registros</h3>
            </div>
        <table class="table" id="lista_registros">
            <thead>
                <th>Matricula</th>
                <th>Tipo Vehiculo</th>
                <th>Fecha de ingreso</th>
                <th>Fecha de Salida</th>
            </thead>
            <tbody>
               <?php 
                 $ingresosT = RegistroPermanente();
                 if($ingresosT->num_rows){
                    foreach($ingresosT as $ingresoT){ ?>
                <tr>
                    <td class="matricula"><?php echo $ingresoT['matricula']?></td>
                    <?php if($ingresoT['tipo'] == 'AUTO'){?>
                        <td><i title="Automovil" class="icon iconCar fas fa-car"></i></td>
                   <?php }else{?> 
                        <td><i title="Motocicleta" class="icon iconMot fas fa-motorcycle"></i></td>
                    <?php  }?>
                    <td><?php echo $ingresoT['fechaingreso']?></td>
                   <td><?php echo $ingresoT['fechasalida']?></td>
                  <?php    }
                 } ?>
                </tr>
              </tbody>
        </table>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>




