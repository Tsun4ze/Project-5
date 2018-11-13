<?php

require 'models/autoload.php';

$pass = password_hash("essai", PASSWORD_DEFAULT);

$db = Database::dbconnect();

try{
    $req = $db->prepare('INSERT INTO users (nom, prenom, adm, pwd, email, dateBirth) VALUES(:nom, :prenom, :adm, :pwd, :email, :dateBirth)');
    $req->execute(array(
        'nom' => 'ForteRoche',
        'prenom' => 'Jean',
        'adm' => '0',
        'pwd' => $pass,
        'email' =>'best.writer@test.com',
        'dateBirth' => '15/10/1956'

    ));

    echo 'Done :) !';
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
}

/* used to create an account */