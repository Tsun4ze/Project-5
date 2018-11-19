<?php

class DataUserManager extends Manager
{
    public $_db;
    
	public function __construct(PDO $db)
	{
		$this->_db = $db;
    }

    public function getUserResults()
    {
        
        $sql = 'SELECT Nom, Prenom, Hematie, Hemoglob, Hemato, PN, PE, PB, Lympho, Monocy, Plaquette 
            FROM datauser  
            WHERE Nom = :userNom AND Prenom = :userPrenom';
        
        $req = $this->_db->prepare($sql);
        $req->bindValue(':userNom', $_SESSION['nom'], PDO::PARAM_STR);
        $req->bindValue(':userPrenom', $_SESSION['prenom'], PDO::PARAM_STR);
        $req->execute();

        while($userDonnes = $req->fetch())
        {
            $allDonnes[] = new DataUser($userDonnes);
        }

        $req->closeCursor();

        return $allDonnes;
    }
}