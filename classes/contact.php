<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/contact.css" />
</head>

<body>
<?php
include_once './Commun/header.php';
?>

<main>
        <div class="ligne1">
            <div class="box"><img src="../img/contact/insta" alt="instagram"></div>
            <div class="box"><img src="../img/contact/info" alt="information"></div>
        </div>
        <div class="ligne2">
            <div class="box"><img src="../img/contact/horaire" alt="horaire"></div>
            <div></div>
        </div>
    </main>

<?php
include_once 'Commun/footer.php'
?>