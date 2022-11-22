<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
  $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
  $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<link rel="stylesheet" href="<?php echo $path ?>/css/header.css" />

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Club Fit Center</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
</head>

<body>
  <header>
    <div class="flottant">
      <img src="<?php echo $path ?>/img/logo.png" id="haut" alt="logo fit center" />
    </div>

    <nav>
      <a href="<?php echo $path ?>/accueil.php">Accueil</a>
      <a href="<?php echo $path ?>/classes/tarifs.php">Tarifs</a>
      <a href="<?php echo $path ?>/classes/inscrire.php">S'inscrire</a>
      <a href="<?php echo $path ?>/pages/concept.html">Notre concept</a>
      <a href="<?php echo $path ?>/classes/contact.php">Contact</a>
      <a href="<?php echo $path ?>/classes/connexion.php">Connexion</a>
      <div class="animation start-home"></div>
    </nav>
  </header>
</body>

</html>