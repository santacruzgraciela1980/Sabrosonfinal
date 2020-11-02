<?php
      function buscar_usuario($dato){
        $archivo=fopen("../archivos/tipo_usuario.txt","r");
        while(!feof($archivo)){
          $linea=fgets($archivo);
          $datos=explode("|",$linea);
          if(trim($dato)==trim($datos[0])){
            return $datos[1];
          }
        }
        fclose($archivo);
      }
      function buscar_barrio($dato){
        $archivo=fopen("../archivos/barrios.txt","r");
        while(!feof($archivo)){
          $linea=fgets($archivo);
          $datos=explode("|",$linea);
          if(trim($dato)==trim($datos[0])){
            return $datos[1];
          }
        }
        fclose($archivo);
      }

?>