<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
include('../../query/qconn/qc.php');

// date_default_timezone_set('America/Mexico_City');
// setlocale(LC_TIME, 'es_MX.UTF-8');
// $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$id = $_POST['id'];
$compania = $_POST['compania'];
$fecha_llegada = $_POST['fecha_entrega'];
$persona_envia = $_POST['persona_envia'];
$costo = $_POST['costo'];
$id_int = $_POST['codigo_interno'];
$id_ext = $_POST['codigo_externo'];

    // $sql_insert = "INSERT INTO envios(fecha_registro,compania,fecha_llegada,id_envio,costo_envio,codigo_envio_interno,codigo_envio_externo) VALUES('$fecha_sistema','$compania','$fecha_llegada','$persona_envia','$costo','$id_int','$id_ext')";
    // $resultado_sql2 = $conn->query($sql_insert);
    // $row_sql_insert = $resultado_sql2->fetch_assoc();

    $sql = "UPDATE envios SET compania = '$compania', fecha_llegada = '$fecha_llegada', id_envio = '$persona_envia', costo_envio = '$costo', codigo_envio_interno = '$id_int', codigo_envio_externo = '$id_ext' WHERE id = '$id'";
    $resultado_sql = $conn->query($sql);
    // $row_sql = $resultado_sql->fetch_assoc();
    if($resultado_sql){
        
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Actualización realizada',
            text: 'El envío ha sido actualizada',
            footer: 'Ventas en línea</a>'
        }).then(function(){window.location='../venta_gral.php';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }

?>

</body>
</html>