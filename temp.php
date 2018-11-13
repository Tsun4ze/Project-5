<?php

/* require 'models/autoload.php';

$pass = password_hash("essai", PASSWORD_DEFAULT);

$db = Database::dbconnect();

try{
    $req = $db->prepare('INSERT INTO users (nom, prenom, adm, pwd, email, dateBirth) VALUES(:nom, :prenom, :adm, :pwd, :email, :dateBirth)');
    $req->execute(array(
        'nom' => 'Saint-Mart',
        'prenom' => 'Therese',
        'adm' => '0',
        'pwd' => $pass,
        'email' =>'theoldone@test.com',
        'dateBirth' => '25/05/1940'

    ));

    echo 'Done :)';
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
} */

/* used to create an account */