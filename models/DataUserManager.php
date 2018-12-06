<?php
namespace Projet5\models;


class DataUserManager extends Manager
{
    public $_db;
    
	public function __construct($db)
	{
		$this->_db = $db;
    }

    public function getUserResults()
    {
        
        $sql = 'SELECT Nom, Prenom, Hematie, Hemoglob, Hemato, PN, PE, PB, Lympho, Monocy, Plaquette 
            FROM datauser  
            WHERE Nom = :userNom AND Prenom = :userPrenom';
        
        $req = $this->_db->prepare($sql);
        $req->bindValue(':userNom', $_SESSION['nom'], \PDO::PARAM_STR);
        $req->bindValue(':userPrenom', $_SESSION['prenom'], \PDO::PARAM_STR);
        $req->execute();

        while($userDonnes = $req->fetch())
        {
            $allDonnes[] = new DataUser($userDonnes);
        }

        $req->closeCursor();

        return $allDonnes;
    }

    public function getDataUser($nom, $prenom)
    {
        $sql = 'SELECT * FROM datauser WHERE Nom = :Nom AND Prenom = :Prenom';
        $req = $this->_db->prepare($sql);
        $req->execute(array(
            'Nom' => $nom,
            'Prenom' => $prenom
        ));

        while($dataUpt = $req->fetch())
        {
            $listData[] = new DataUser($dataUpt);
        }

        $req->closeCursor();

        return $listData;
    }

    public function updDataUser(DataUser $dataUpdate)
    {
        $sql = 'UPDATE datauser SET  Hematie = :hematie, Hemoglob = :hemoglob, Hemato = :hemato, PN = :pn, PE = :pb, PB =:pb, Lympho = :lympho, Monocy = :monocy, Plaquette = :plaquette WHERE id = :id';

        $req = $this->_db->prepare($sql);
        $req->execute(array(
            'hematie' => $dataUpdate->Hematie(),
            'hemoglob' => $dataUpdate->Hemoglob(),
            'hemato' => $dataUpdate->Hemato(),
            'pn' => $dataUpdate->PN(),
            'pe' => $dataUpdate->PE(),
            'pb' => $dataUpdate->PB(),
            'lympho' => $dataUpdate->Lympho(),
            'monocy' => $dataUpdate->Monocy(),
            'plaquette' => $dataUpdate->Plaquette(),
            'id' => $dataUpdate->id()
        ));
    }
}