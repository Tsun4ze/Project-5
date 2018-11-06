<?php

/* require 'models/autoload.php';

$pass = password_hash("test", PASSWORD_DEFAULT);

$db = Database::dbconnect();

try{
    $req = $db->prepare('INSERT INTO users (nom, prenom, adm, pwd, email, dateBirth) VALUES(:nom, :prenom, :adm, :pwd, :email, :dateBirth)');
    $req->execute(array(
        'nom' => 'Collignon',
        'prenom' => 'Jean',
        'adm' => '1',
        'pwd' => $pass,
        'email' =>'diplodokus@test.com',
        'dateBirth' => '10/02/1961'

    ));

    echo 'Done :)';
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
} */

/* used to create an account */