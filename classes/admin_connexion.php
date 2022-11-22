<?php
session_start();
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $path = "http://" . $_SERVER['SERVER_NAME'] . "/Fit_Center";
} else {
    $path = "https://" . $_SERVER['SERVER_NAME'];
}

require_once('connect_inc.php');

$email_admin = $_POST['email_admin'];
$password_admin = $_POST['password_admin'];

//echo $email_admin;
//echo $password_admin;

if (isset($email_admin) && empty($email_admin)) {
    exit("mail non definis !");
}
else {
    echo "mail definis";
}

if (isset($password_admin) && empty($password_admin)) {
        exit("Mot de passe non definis");
}
else {
    echo "mot de passe definis";
}


$req = $pdo->query("SELECT * FROM admin WHERE mail_admin = '".$email_admin."'");
foreach ($req as $admin) {
    echo $admin['mail_admin'];
    echo $admin['password_admin'];

    if ($admin['password_admin'] === $password_admin) {
        $_SESSION['admin'] = 1;
        echo "mot de passe ok";
        header('Location: inscrire.php');
    }
    else {
        echo "mot de passe incorrect !";
    }
}
?>