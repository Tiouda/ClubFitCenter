<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}

require_once('connect_inc.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tarifs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/inscrire.css" />
</head>

<body id="exercice1_body">
<?php
include_once './Commun/header.php';
?>
    <?php 
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === 1) { //Si la variable d'environnement admin est strictement egal à 1
        echo "Un admin est connecter !";
        $req = $pdo->query("SELECT * FROM adherents"); 
        foreach ($req as $adherents) { //On boucle sur toute la table adhérent pour récupérer toute les informations
   ?>
      <form name="info_adherent" method="post" action="modif_adherent.php">
         <div style="width: 400px; height: auto; border: 2px solid grey;">
            <ul>
               <input type="hidden" name="id_adherent" value="<?php echo $adherents['id'];?>"> <!-- Cet input sert à indentifier quelle ligne de la table supprimer ou modifier -->
               <input id="nom_<?php echo $adherents['id']; ?>" type="text" name="nom" value="<?php echo $adherents['nom'];?>" disabled> <!-- On différencie les information de chaque adhérent en incluant sont id de la bdd dans sont id html, ce qui nous permet de savoir quelle éléement est ciblé. Chauqe input reprend la valeur récupérer via le foreach, ils sont desactiver par défaut -->
               <input id="prenom_<?php echo $adherents['id']; ?>" type="text" name="prenom" value="<?php echo $adherents['prenom'];?>" disabled>
               <input id="date_naissance_<?php echo $adherents['id']; ?>" type="text" name="date_naissance" value="<?php echo $adherents['date_naissance'];?>" disabled>
               <input id="mail_<?php echo $adherents['id']; ?>" type="text" name="mail" value="<?php echo $adherents['mail'];?>" disabled>
               <input id="rue_<?php echo $adherents['id']; ?>" type="text" name="rue" value="<?php echo $adherents['rue'];?>" disabled>
               <input id="ville_<?php echo $adherents['id']; ?>" type="text" name="ville" value="<?php echo $adherents['ville'];?>" disabled>
               <input id="code_postal_<?php echo $adherents['id']; ?>" type="text" name="code_postal" value="<?php echo $adherents['code_postal'];?>" disabled>
               <input id="numero_tel_<?php echo $adherents['id']; ?>" type="text" name="numero_tel" value="<?php echo $adherents['numero_tel'];?>" disabled>
            </ul>
            <button class="modif" name="<?php echo $adherents['id'];?>">Modifier</button> <!-- Cette ligne nous sert a identifier quelle adherent on modifie, utile dans le JS -->
            <button type="submit">Valider</button>
         </div>
      </form>
      <form name="suppression" method="post" action="suppression_adherent.php">
         <input type="hidden" name="id_adherent" value="<?php echo $adherents['id'];?>">  <!-- Cette ligne nous sert a identifier quelle adherent on supprime -->
         <button type="submit">Supprimer l'adherent</button>
      </form>
   <?php
        }
    ?>
   <form name="deconnexion" method="post" action="deconnexion.php">
      <button type="submit">Deconnexion</button>
   </form>
    <?php
    }
    else {
    ?>
     <div id="exercice1_conteneur">
        <form name="inscription" method="post" action="adherent_traitement.php">
            <fieldset class="exercice1_fieldset">
               <legend class="exercice1_legend">Pré-inscription</legend>

               <div class="exercice1_label">
                  Nom
               </div>
               <div class="exercice1_input">
                  <input type="text" name="nom" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Prénom
               </div>
               <div class="exercice1_input">
                  <input type="text" name="prenom" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Date de naissance
               </div>
               <div class="exercice1_input">
                  <input type="text" name="date_naissance" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Mail
               </div>
               <div class="exercice1_input">
                  <input type="text" name="mail" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Rue
               </div>
               <div class="exercice1_input">
                  <input type="text" name="rue" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  ville
               </div>
               <div class="exercice1_input">
                  <input type="text" name="ville" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  code postal
               </div>
               <div class="exercice1_input">
                  <input type="text" name="code_postal" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Numéro de téléphone
               </div>
               <div class="exercice1_input">
                  <input type="text" name="num_tel" class="exercice1_champ" />
               </div><br />
             
                  
               </div>
               <div class="exercice1_input">
                  <input type="submit" value="S'inscrire" class="exercice1_champ" />
                  <?php
                     if (isset($_SESSION['confirmation_inscription']) && $_SESSION['confirmation_inscription'] === 1) {
                  ?>
                  <h2 style="color: green; font-weight: bold;">Nous avons bien reçu vos coordonnées</h2>
                  <?php 
                        $_SESSION['confirmation_inscription'] = 0;
                     }
                     else {
                  ?>
                  <h2 style="color: red; font-weight: bold;">Vous n'ête pas inscrit !</h2>
                  <?php      
                     }
                  ?>
               </div><br />
            </fieldset>
        </form>
</div>
    <?php 
    }
    ?>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/modif_adherent.js"></script>
   </body>
</html>
    <?php
    include_once 'Commun/footer.php'
    ?>