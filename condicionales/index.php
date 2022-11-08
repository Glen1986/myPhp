<?php
   $var1 = 10;
   $var2 = 10;
   if($var1 != $var2){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>
<body>
  <h1>Son Diferentes</h1>
</body>
</html>
<?php    
   }else if( $var1 == $var2 && $var1 !== $var2 ){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Son Iguales, Pero no Identicos</h1>
</body>
</html>
<?php
     }
   else if( $var1 === $var2 ){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Son Identicos</h1>
</body>
</html>
<?php
   } 
?>
