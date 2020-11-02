<?php
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $mail=$_POST['mail'];
    $contra=$_POST['contra'];
    $ccontra=$_POST['ccontra'];
    $tipo_usuario=$_POST['tipo_usuario'];
    $direccion=$_POST['direccion'];
    $localidad=$_POST['localidad'];
    $archivo=fopen("../archivos/usuarios.csv","r")or die("error");
    $archivo2=fopen("../archivos/usuariostemp.csv","a+")or die("error");
    $arreglo=trim($id.'|'.$nombre.'|'.$telefono.'|'.$mail.'|'.$contra.'|'.$tipo_usuario.'|'.$direccion.'|'.$localidad);

    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode("|",$linea);
        $cont=0;
        if($datos[0]==""){
        break;
        }
        if(trim($datos[0])==trim($id)&& strlen($linea)>0){
            $cont=1;
            fputs($archivo2,$arreglo."\n");
        }
        if($cont==0){
            fputs($archivo2,trim($datos[0].'|'.$datos[1].'|'.$datos[2].'|'.$datos[3].'|'.$datos[4].'|'.$datos[5].'|'.$datos[6].'|'.$datos[7])."\n");
        }
    }
    fclose($archivo);
    fclose($archivo2);
    unlink("../archivos/usuarios.csv");
    rename("../archivos/usuariostemp.csv","../archivos/usuarios.csv");
    header("Location:../interfaces/admin.php");
?>