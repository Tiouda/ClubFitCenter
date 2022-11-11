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
    <title>Tarifs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/tarifs.css" />
</head>

<body>
<?php
include_once './Commun/header.php';
?>
    <section>
        <h2 class="titre">Nos Abonnement</h2>

        <div class="cards">
            <div class="container">
                <div class="card">
                    <div class="slide slide1">
                        <div class="content">
                            <div class="icon">
                                <h2>[FIT GO]</h2>
                                <h2>24,99€/Mois</h2>
                                <h2>Pendant 12 mois</h2>
                                <img src="../img/tarifs/muscle.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="slide slide2">
                        <div class="content">
                            <h3>AVANTAGES</h3>
                            <p>
                                - Accès de 6h à 23h, 7j/7j
                                <img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur musculation<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cardio training<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cours collectifs<img src="../img/tarifs/cross.png" alt="" />
                            </p>
                            <p>
                                - Secteur cours vidéos<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur box cross training<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Espace détente<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Suivi coaching machine
                                <img src="../img/tarifs/check.png" alt="" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="slide slide1">
                        <div class="content">
                            <div class="icon">
                                <h2>[FIT GO+]</h2>
                                <h2>29,99€/Mois</h2>
                                <h2>Pendant 12 mois</h2>
                                <img class="plus" src="../img/tarifs/muscle+.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="slide slide2">
                        <div class="content">
                            <h3>AVANTAGES</h3>
                            <p>
                                - Accès de 6h à 23h, 7j/7j
                                <img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur musculation<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cardio training<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cours collectifs<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cours vidéos<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur box cross training<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Espace détente<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Suivi coaching machine
                                <img src="../img/tarifs/check.png" alt="" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="slide slide1">
                        <div class="content">
                            <div class="icon">
                                <h2>[GOLD DUO]</h2>
                                <h2>39,99€/Mois</h2>
                                <h2>Pendant 12 mois</h2>
                                <img class="plus" src="../img/tarifs/double.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="slide slide2">
                        <div class="content">
                            <h3>AVANTAGES</h3>
                            <p>
                                - Accès de 6h à 23h, 7j/7j
                                <img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur musculation<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cardio training<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cours collectifs<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur cours vidéos<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Secteur box cross training<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Espace détente<img src="../img/tarifs/check.png" alt="" />
                            </p>
                            <p>
                                - Suivi coaching machine
                                <img src="../img/tarifs/check.png" alt="" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card">
                    <div class="slide slide1">
                        <div class="content">
                            <div class="icon">
                                <h2>Frais de dossier</h2>
                                <h2>&</h2>
                                <h2>badges d'accès</h2>
                                <h2>50€</h2>
                                <img class="plus" src="../img/tarifs/badge.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="slide slide2">
                        <div class="content">
                            <h3>Informations</h3>
                            <p>- Cours collectifs et application coaching 5€/mois</p>
                            <p>- Info cours collectifs :</p>
                            <p>11 mois/an, sous réserve de changement du planning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deuxieme">
        <div class="groupe">
            <h2>Formules sans engagement</h2>
            <div class="groupeBox">
                <div class="box"><img src="../img/tarifs/pass.png" alt="" /></div>
                <div class="box"><img src="../img/tarifs/1mois.png" alt="" /></div>
                <div class="box"><img src="../img/tarifs/3mois.png" alt="" /></div>
                <div class="box"><img src="../img/tarifs/6mois.png" alt="" /></div>
                <div class="box"><img src="../img/tarifs/senior.png" alt="" /></div>
            </div>
        </div>
    </section>

    <section class="troisieme">
        <div class="titre">
            <h2>Comment s'inscrire chez Club Fit Center</h2>
        </div>
        <div class="inscription">
            <div class="carte1">
                <div class="maniere">
                    <p>Par SMS</p>
                </div>
                <div class="sous-titre">
                    <p>--- AVANTAGES ---</p>
                </div>
                <div class="avantage">
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />badge accès non stop
                        7j/7 - 6H-23h
                    </h3>
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />Fit appli -
                        application coaching
                    </h3>
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />Engagement 12 mois
                        (minimum)
                    </h3>
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />Frais d'inscription
                        50€ & 1 mois offert
                    </h3>
                </div>
                <div class="sous-titre">
                    <p>--- ÉTAPES ---</p>
                </div>
                <div class="avantage">
                    <h3>
                        Envoyer par SMS au 06 69 56 43 90 votre nom, prénom ainsi que
                        votre formule
                    </h3>
                    <br />
                    <h3>
                        Rendez vous à l'accueil de la salle pour finaliser votre
                        inscription
                    </h3>
                </div>
                <div class="avantage">
                    <h3>
                        Cette formule vous permet de vous préinscrire directement par SMS
                        et de bénéficier des frais d'inscription offerts.
                    </h3>
                </div>
            </div>

            <div class="carte1">
                <div class="maniere">
                    <p>Au club</p>
                </div>
                <div class="sous-titre">
                    <p>--- AVANTAGES ---</p>
                </div>
                <div class="avantage">
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />badge accès non stop
                        7j/7 - 6H-23h
                    </h3>
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />Fit appli -
                        application coaching
                    </h3>
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />Engagement 12 mois
                        (minimum)
                    </h3>
                    <h3>
                        <img src="../img/tarifs/check.png" alt="" />Frais d'inscription
                        50€
                    </h3>
                </div>
                <div class="sous-titre">
                    <p>--- ÉTAPES ---</p>
                </div>
                <div class="avantage">
                    <h3>
                        Rendez vous directement dans votre club
                    </h3>
                    <br />
                    <h3>
                        Accueil ouvert de 10h à 19h du lundi au vendredi
                    </h3>
                </div>
                <div class="avantage">
                    <h3>
                        Pour toute souscription, un RIB et un chèque de caution sont demandés.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'Commun/footer.php'
    ?>