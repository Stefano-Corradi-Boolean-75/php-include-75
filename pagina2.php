<?php

include './vars.php';

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



  <h1>sono la pagina 2 di <?php echo $nome ?> <?php echo $cognome ?></h1>
  <a href="index.php"> torna a home</a>
  
</body>
</html>