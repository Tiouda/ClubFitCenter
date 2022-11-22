<?php
session_start();
require_once "connect_inc.php";

$id_adherent = $_POST['id_adherent'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$mail = $_POST['mail'];
$rue = $_POST['rue'];
$ville = $_POST['ville'];
$code_postal = $_POST['code_postal'];
$numero_tel = $_POST['numero_tel'];

// modification des données
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // création de la requête
    $sql = $pdo->prepare("UPDATE adherents SET
    nom = :nom,
    prenom = :prenom,
    date_naissance = :date_naissance,
    mail= :mail,
    rue = :rue,
    ville = :ville,
    code_postal = :code_postal,
    numero_tel = :numero_tel
    WHERE id = $id_adherent");
}

$sql->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'date_naissance' => $date_naissance,
    'mail' => $mail,
    'rue' => $rue,
    'ville' => $ville,
    'code_postal' => $code_postal,
    'numero_tel' => $numero_tel
));
$sql->closeCursor();
header('Location: inscrire.php'); // Retour sur la page liste user
?>
