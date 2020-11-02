<?php
$nombre=$_POST['nombre']; 
$telefono=$_POST['telefono']; 
$mail=$_POST['mail']; 
$pass=$_POST['pass']; 
$confirmar=$_POST['confirmar']; 
$direccion=$_POST['direccion']; 
$barrio=$_POST['barrio'];
if(empty($nombre) || empty($telefono) || empty($mail) || empty($pass) || empty($confirmar)|| empty($direccion)){
  header("Location:../errores/error2.php");
    exit;
}
elseif(strlen($nombre)<6 || strlen($telefono)<6 || strlen($mail)<6 || strlen($pass)<6 || strlen($confirmar)<6|| strlen($direccion)<6){
   header("Location:../errores/error2.php");
    exit;
}
elseif($pass!=$confirmar){
    header("Location:../errores/error2.php");
    exit;
}
$found=0;
$archivo=fopen("../archivos/usuarios.csv",'r');
while(!feof($archivo)){
    $linea=fgets($archivo);
    $datos=explode('|',$linea);
    $nom=$datos[1];
    $correo=$datos[3];
    if($correo==$mail){
        header("Location:../errores/error1.php");
        $found=1;
    }
}

fclose($archivo);

$cont=0;
$archivo=fopen("../archivos/id_usuario.txt","r")or die("error");
while(!feof($archivo)){
    $fila=fgets($archivo);
    $datos=explode("\t",$fila);
    $cont=$datos[0]+1;

}
fclose($archivo);
$archivo=fopen("../Archivos/id_usuario.txt","w+")or die("error");
while(!feof($archivo)){
    $fila=fgets($archivo);
    $datos=explode("\t",$fila);
    fputs($archivo,$cont);

}
fclose($archivo);


if($found==0){
    $archivo=fopen("../archivos/usuarios.csv",'a+');
    while(!feof($archivo)){
    $linea=fgets($archivo);
    $datos=explode('|',$linea);
    $id=$cont;
    $nom=$datos[1];
    $tel=$datos[2];
    $correo=$datos[3];
    $contra=$datos[4];
    $tipo=2;
    $dir=$datos[6];
    $bar=$datos[7];
    
    $arreglo=$id.'|'.$nombre.'|'.$telefono.'|'.$mail.'|'.$pass.'|'.$tipo.'|'.$direccion.'|'.$barrio."\n";
   
    
}
fputs($archivo,$arreglo);
fclose($archivo);
$archivo=fopen("../archivos/carritos/$mail.csv",'a');
fclose($archivo);
header("Location:../interfaces/login.php");
}




?>