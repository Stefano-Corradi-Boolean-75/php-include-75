<?php

require_once './vars.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>include</title>
</head>
<body>

<?php 

  include './header.php';

?>

  <h1>Ciao <?php echo $nome ?> <?php echo $cognome ?></h1>
  <a href="pagina2.php"> vai a pagina 2 </a>
  
</body>
</html>