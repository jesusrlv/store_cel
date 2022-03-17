<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
include('qconn/qc.php');

$id_int = $_POST['clave_rastreo_int'];
$id_ext = $_POST['clave_rastreo_ext'];

    $sql = "UPDATE venta_gral SET clave_rastreo_ext = '$id_ext' WHERE clave_rastreo_int = '$id_int'";
    $resultado_sql = $conn->query($sql);
    // $row_sql = $resultado_sql->fetch_assoc();
    if($resultado_sql){
        
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Actualización realizada',
            text: 'La clave de rastreo ha sido actualizada',
            footer: 'Ventas en línea</a>'
        }).then(function(){window.location='../be_/venta_gral.php';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }

?>

</body>
</html>