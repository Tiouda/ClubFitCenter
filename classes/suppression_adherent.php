<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}

require_once('connect_inc.php');


$id_adherent = $_POST['id_adherent'];

try {
    $req = $pdo->query("DELETE FROM `adherents` WHERE `id` = $id_adherent" );
    header('Location: inscrire.php');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
};

?>