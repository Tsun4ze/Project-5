<?php
session_start();
require 'models/autoload.php';

$db = Database::dbconnect();
$req = $db->prepare('SELECT Hematie, Hemoglob, Hemato, PN, PE, PB, Lympho, Monocy, Plaquette FROM datauser WHERE Nom = :userNom AND Prenom = :userPrenom');
$req->bindValue(':userNom', $_SESSION['nom'], PDO::PARAM_STR);
$req->bindValue(':userPrenom', $_SESSION['prenom'], PDO::PARAM_STR);
$req->execute();
$result = $req->fetch(PDO::FETCH_OBJ);

echo json_encode($result);
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        
    </body>
</html>