<?php include 'header.php'; 
    include 'Modelo/conexion.php';
    include 'Modelo/consultas.php';

?>



<body class="regsto">
    
    <div class="registro">
        <div class="container">
        <h1 class="title">Parqueaderos Ocupados</h1>
        <div class="miniMenu">
            <h2><a href="index.php">Registrar Vehiculo</a></h2>
            <h2><a href="ingresosTotales.php">Ingresos Totales</a></h2>
            </div>
        <table class="table" id="lista_registros">
            <thead>
                <th>ParkingNum</th>
                <th>Matricula</th>
                <th>Tipo Vehiculo</th>
                <th>Fecha de ingreso</th>
                <th>Registrar Salida</th>
            </thead>
            <tbody>
               <?php 
                 $ingresos = obtenerIngresos();
                 if($ingresos->num_rows){
                     $i = 1;
                    foreach($ingresos as $ingreso){ ?>
                <tr>
                        
                    <td title="Número de celda ocupada" ><?php echo $i++ ; ?></td>
                    <td class="matricula"><?php echo $ingreso['matricula']?></td>
                    <?php if($ingreso['tipoV'] == 'AUTO'){?>
                        <td><i title="Automovil" class="icon iconCar fas fa-car"></i></td>
                   <?php }else{?> 
                        <td><i title="Motocicleta" class="icon iconMot fas fa-motorcycle"></i></td>
                    <?php  }?>
                    <td><?php echo $ingreso['FechaIngreso']?></td>
                    <td><a href="Controlador/controladorRetiro.php?id=<?php echo $ingreso['NumRegistro'];?>&placa=<?php echo $ingreso['matricula'];?>&tipo=<?php echo $ingreso['tipoV'];?>&ingreso=<?php echo $ingreso['FechaIngreso'];?>">
                    <i title="Retirar" class="icon iconE fas fa-sign-out-alt"></i></a></td>
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