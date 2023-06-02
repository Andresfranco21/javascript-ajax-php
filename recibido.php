<?php
include('./conexion/conexion.php');

$peticion='';
if(isset($_POST['peticion'])) { $peticion=$_POST['peticion']; }

$consulta=mysqli_query($mysqli, "SELECT * FROM categorias WHERE genero = '$peticion'" );
$array_data=array();
while($data=mysqli_fetch_assoc($consulta))
{
    $array_data[]=$data;
}
echo json_encode($array_data, JSON_UNESCAPED_UNICODE);

?>