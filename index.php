<?php

$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, voluptatum culpa! Ratione nemo, voluptatum obcaecati omnis nihil nobis similique perspiciatis laborum recusandae, minima non. Error aperiam numquam ipsum recusandae Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati accusamus debitis culpa dicta dolor delectus maiores illo corrupti aspernatur sint, eveniet fuga labore natus ipsum et harum doloremque exercitationem esse?";

$paragrafoSenzaSpazi = str_replace(" ", "", $paragrafo);

$lunghezzaParagrafo = strlen($paragrafoSenzaSpazi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-BADWORDS</title>
</head>
<body>
  <p><?php echo $paragrafo ?></p>
  <h2>La lunghezza del pragrafo qui sopra scritto e' di <?php echo $lunghezzaParagrafo ?> caratterri</h2>
</body>
</html>