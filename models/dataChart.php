<?php
session_start();
require 'autoload.php';
$db = Database::dbconnect();

$req = $db->prepare('SELECT Hematie, Hemoglob, Hemato, PN, PE, PB, Lympho, Monocy, Plaquette FROM datauser WHERE Nom = :userNom AND Prenom = :userPrenom');
$req->bindValue(':userNom', $_SESSION['nom'], PDO::PARAM_STR);
$req->bindValue(':userPrenom', $_SESSION['prenom'], PDO::PARAM_STR);
$req->execute();

$result = array();
while($result = $req->fetch(PDO::FETCH_OBJ))
{
    $results[] = $result;
}

echo json_encode($results);
?>