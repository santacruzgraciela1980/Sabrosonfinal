<?php
      function buscar_categoria($dato){
        $archivo=fopen("../archivos/categorias.txt","r");
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