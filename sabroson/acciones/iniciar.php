<?php
    $usr=$_POST['correo'];
    $pwd=$_POST['pass'];
    if($usr==1234 && $pwd==1234){
        session_start();
        $_SESSION['admin']['nombre']="Administrador";
        header("Location:../interfaces/admin.php");
        exit;
    }
    $archivo=fopen("../archivos/usuarios.csv",'r');
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $datos=explode('|',$linea);
        $nom=$datos[1];
        $user=$datos[3];
        $password=$datos[4];
        $dir=$datos[6];
        $loc=$datos[7];
        if($user==$usr && $password==$pwd){
            session_start();
            $_SESSION['user']=array();
            $_SESSION['user']['nombre']=$nom;
            $_SESSION['user']['mail']=$user;
            $_SESSION['user']['direccion']=$dir;
            $_SESSION['user']['localidad']=$loc;
            echo $_SESSION['user']['nombre'];
            header("Location:../Index.php");
            exit;
        }
        header("Location:../errores/error4.php");
    }

?>