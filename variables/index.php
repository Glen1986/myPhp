
<?php 
// variables
   $nombre = 'Glen';
   echo 'my name is: <br/>';
   echo $nombre  .'<br/>';
   echo 'Nombre Completo Es: <br/>';
   $nombre = 'Glen Escobar';
   echo $nombre .'<br/>';
   $edad = 36;
   $bool = 0;
   echo 'tengo '. $edad .' años <br/>'.$bool.'<br/>';
   // constantes
   define('NAME', 'Glen');
   echo NAME .'<br/>';
   // arrays
   $nombres = array('Glen', 'Darthi', 'Luly', 'Bistek');
   echo $nombres[2].' '. $nombres[1].' '. $nombres[3] . '<br/>';
   ///////////
   $otrosNombres = ['Glen', 'Darthi', 'Luly', 'Bistek'];
   echo $otrosNombres[2].'<br/>';

   $informacion['name'] = 'Glen';
   $informacion['age'] = 36;
   $informacion['gringo'] = true;

   if($informacion['gringo'] == true){
      echo 'No soy Brasileño'.'<br/>';
   }else{
      echo ''.'<br/>';
   };

   echo $informacion['name'].'<br/>'; 
   echo 'edad: '.$informacion['age'].'<br/>';
   // diferencia entre "", y '';
   echo 'hola mi nombre es: '. $nombre.'<br/>';
   echo "hola mi nombre es: $nombre <br/>";
   $nombreDaClasse = 'texto';
   $position = 2;
   echo "<div class=\"$nombreDaClasse$position\">Contenido aqui</div>";
   // operaciones matematicas
   $numero = 10;
   $numero2 = 5;
   $numero3 = 2;
   $resultado = $numero+$numero2;
   echo $numero;
   echo '<br/>';
   echo $resultado;
   echo '<br/>';
   echo $numero + $numero2 * $numero3;
   echo '<br/>';
   echo ($numero + $numero2) * $numero3;

?>
