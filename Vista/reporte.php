<?php 
    include '../Modelo/consultas.php';

    $inicio = $_GET['fechainicio'];
    $fin    = $_GET['fechafinal'];

    echo $inicio . "<br>";
    echo $fin . "<br>";

        header('Content-Type:text/xls; charset=uft-8');
        header('Content-Disposition: attachment; filename="ReporteFechas.xls');

        $salida=fopen('php://output', 'w');

        $reportes =  BuscarPorFecha($inicio,$fin);

        if($reportes->num_rows){
            foreach($reportes as $reporte){
                fputcsv($salida, array($reporte['matricula'],$reporte['tipo'], $reporte['fechaingreso'],$reporte['fechasalida']));
            }
        }

?>