<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les boucles</title>
  </head>
  <body>
    <?php
    $count=1;

    while ($count < 10) {
      # code...
      echo ($count+= $count/2) . '<br/>';
    }

     ?>
  </body>
</html>
