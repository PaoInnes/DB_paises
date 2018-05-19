//Funciones para el
<?php
  function validar ($pal,$regex){//Esta función recibe una palabra y una regex
      $pal=strip_tags($pal); //quitar las etiquetas
      $pal=mysql_real_escape_string($pal); //quitar los comandos sql
      $val=preg_match($regex,$pal); //checar la coincidencia
      if ($val==1)
        return $val; //coincide con la regex, devuelve la cadena validada y segura
      else
        return false; //regresa falso porque no cumple con la regex
    };
