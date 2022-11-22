<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}

require_once('connect_inc.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$mail = $_POST['mail'];
$rue = $_POST['rue'];
$ville = $_POST['ville'];
$code_postal = $_POST['code_postal'];
$num_tel = $_POST['num_tel'];

try {
    $req = $pdo->prepare("INSERT INTO `adherents` (`nom`, `prenom`, `date_naissance`, `mail`, `rue`, `ville`, `code_postal`, `numero_tel`) VALUES (:nom, :prenom, :date_naissance, :mail, :rue, :ville, :code_postal, :numero_tel)");
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naissance' => $date_naissance,
        'mail' => $mail,
        'rue' => $rue,
        'ville' => $ville,
        'code_postal' => $code_postal,
        'numero_tel' => $num_tel
    ));
    $_SESSION['confirmation_inscription'] = 1;
    header('Location: inscrire.php');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
};
?>