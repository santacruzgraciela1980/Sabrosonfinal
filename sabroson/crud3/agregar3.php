<?php
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$mail=$_POST['mail'];
$contra=$_POST['contra'];
$ccontra=$_POST['ccontra'];
$tipo_usuario=$_POST['tipo_usuario'];
$direccion=$_POST['direccion'];
$localidad=$_POST['localidad'];

$cont=0;
$archivo=fopen("../archivos/id_repartidor.txt","r")or die("error");
while(!feof($archivo)){
    $fila=fgets($archivo);
    $datos=explode("\t",$fila);
    $cont=$datos[0]+1;

}
fclose($archivo);
$archivo=fopen("../Archivos/id_repartidor.txt","w+")or die("error");
while(!feof($archivo)){
    $fila=fgets($archivo);
    $datos=explode("\t",$fila);
    fputs($archivo,$cont);

}
fclose($archivo);

$arreglo=$cont.'|'.$nombre.'|'.$telefono.'|'.$mail.'|'.$contra.'|'.$tipo_usuario.'|'.$direccion.'|'.$localidad."\n";


$archivo=fopen("../archivos/repartidor.csv","a+");
fputs($archivo,$arreglo);
fclose($archivo);
header("Location:../interfaces/repartidor.php");

?>