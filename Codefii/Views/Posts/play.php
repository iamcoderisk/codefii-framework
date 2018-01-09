<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Play</title>
  </head>
  <body>
    <h4>welcome from play</h4>
    <?php
      foreach($user as $m)
      {
        echo $m['username'];
      }

     ?>
  </body>
</html>
