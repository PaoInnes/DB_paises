<?php
  @include 'funci.php';
  $op=$_POST["op"]; //recibir los datos
  $lugar=$_POST["lugar"];
  $lugar=validar($lugar,"/[A-Za-zÇ-Üá-ñšô´ä-ü\[\]]{4,35}$/"); //validar que los datos sean correctos
  $op=validar($op,"/^[PC]$/");
  if($op!=false  && $lugar!=false){
      //mostrar la tabla, bien fácil siono
  }
  else{
    if ($op==false) {
      echo "Ingresa una opción disponible:)</br>";
    }
    if($lugar==false){
      echo "Ingresa un lugar válido :)</br>";
    }
    echo "<a href='..\html\principal.html'>Regresar a la búsqueda<a>";

  }





?>
