<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
  $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
  $path = "https://" . $_SERVER['SERVER_NAME'];
}
?>

<link rel="stylesheet" href="<?php echo $path ?>/css/footer.css" />


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Club Fit Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
</head>

<body>
    <div class="reseau">
        <ul>
            <li style="--clr: #1877f2">
                <a href="https://www.facebook.com/ClubfitcenterCalais" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li style="--clr: #f21881">
                <a href="https://www.instagram.com/clubfitcentercalais/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li style="--clr: #f21818">
                <a href="https://www.youtube.com/channel/UCxQVJsULGDq5eBGO0wMxRzQ" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li style="--clr: #01d801">
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </li>
            <li style="--clr: #fbc638">
                <a href="#haut"><i class="fa-solid fa-angles-up"></i></a>
            </li>
        </ul>
    </div>
    </main>

    <footer>
        <div class="pere">
            <div class="case">
                <a href="#">
                    <h4>À propos de</h4>
                </a>
                <a href="#">
                    <h4>Contact</h4>
                </a>
                <a href="#">
                    <h4>Conditions</h4>
                </a>
            </div>

            <div class="case">
                <a href="pages/team_cfc.html">
                    <h4>Team CFC</h4>
                </a>
                <a href="#">
                    <h4>Team Coach</h4>
                </a>
                <a href="#">
                    <h4>Records</h4>
                </a>
            </div>

            <div class="case">
                <a href="#">
                    <h4>Contrats</h4>
                </a>
                <a href="#">
                    <h4>Vente au sein du Club</h4>
                </a>
                <a href="#">
                    <h4>Crédits</h4>
                </a>
            </div>

            <div class="case">
                <a href="#">
                    <h4>Information cookie</h4>
                </a>
                <a href="#">
                    <h4>Droit de rétractation</h4>
                </a>
                <a href="#">
                    <h4>Conditions générales</h4>
                </a>
                <a href="#">
                    <h4>Mention légales</h4>
                </a>
            </div>
        </div>
    </footer>
    <div class="tds">
        <p>
            CLUB FIT CENTER - COPYRIGHT © 2014 / Page crée par
            <a href="https://www.linkedin.com/in/dalian-tillier-365b691b8/" target="_blank">Dalian Tillier</a>
        </p>
    </div>
    <script src="js/main.js"></script>
</body>

</html>