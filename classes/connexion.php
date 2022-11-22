<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/connexion.css" />
</head>

<body>
<?php
include_once './Commun/header.php';
?>
<main>
<div class="container">
      <form name="connexion" method="post" action="admin_connexion.php">
        <h2>Bienvenue</h2>
        <input type="email" name="email_admin" placeholder="Email" /><br />
        <input type="password" name="password_admin" placeholder="Mot de passe" /><br />
        <input type="submit" value="Connexion" /><br />
        <a href="#">Mot de passe oublié</a>
      </form>

      <div class="drop drop-1"></div>
      <div class="drop drop-2"></div>
      <div class="drop drop-3"></div>
      <div class="drop drop-4"></div>
      <div class="drop drop-5"></div>
    </div>
</main>

<?php
include_once 'Commun/footer.php'
?>