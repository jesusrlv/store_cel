<?php
include('qconn/qc.php');


// if

// https://laracasts.com/index.php/index.php/discuss/channels/general-discussion/how-to-add-multiple-same-name-input-fields-in-one-form-into-database
// https://www.sourcecodester.com/tutorials/php/13495/php-multiple-form-inputs.html

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


$nombreproducto = $_POST['nombreproducto'];

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

echo $nombreproducto;


//  end of if

?>