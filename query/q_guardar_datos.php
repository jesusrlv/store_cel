<?php
include('qconn/qc.php');


// if

$numero_general = 0;
$cantidad = $_POST['num_prod'];
$total_precio = $_POST['total_precio'];
$nombre_completo = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['tel'];
$email = $_POST['email'];
$tarjeta = $_POST['tarjeta'];
$nombre_tarjeta = $_POST['nombre_tarjeta'];
$expira_mes = $_POST['expira_mes'];
$expira_annio = $_POST['expira_annio'];
$nip = $_POST['ccc'];

echo $cantidad;
echo $total_precio;
echo $nombre_completo;
echo $direccion;
echo $telefono;
echo $email;
echo $tarjeta;
echo $nombre_tarjeta;
echo $expira_mes;
echo $expira_annio;
echo $nip;


//  end of if

?>