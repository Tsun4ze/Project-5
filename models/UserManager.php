<?php

class UserManager extends Manager
{
    public $_db;
    
	public function __construct(PDO $db)
	{
		$this->_db = $db;
    }

    public function checkLogin($login, $password)
    {
        $req = $this->_db->prepare('SELECT * FROM users WHERE email = :email');
        $req->execute(array(
            'email' => $login
        ));
        
        $userDB = $req->fetch();
        
        if( !empty($userDB) && password_verify($password, $userDB['pwd']) )
        {

            
            $_SESSION['logged'] = 'true';
            $_SESSION['nom'] = $userDB['nom'];
            $_SESSION['prenom'] = $userDB['prenom'];
            if($userDB['adm'] === '1')
            {
                
                $_SESSION['agLab'] = 'on';
                header('Location: index.php?act=dashLab');
                exit();
            }
            else
            {
                header('Location: index.php?act=dashboard');
                exit();
            }

            
            
        }
        else
        {
            $session = new Session();
            $session->setFlash('Indentifiants incorrect', 'danger');

            header('Location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        
    }

    public function getUsers()
    {
        $sql = 'SELECT id, nom, prenom, email, dateBirth FROM users WHERE adm = 0';
        $req = $this->_db->query($sql);
        while($userInfo = $req->fetch())
        {
            $listUser[] = new User($userInfo);
        }
        $req->closeCursor();

        return $listUser;
    }

    public function addUser()
    {
        $hashedPass = password_hash($_POST['addPwd'], PASSWORD_DEFAULT);

        $sql = 'INSERT INTO users (nom, prenom, adm, pwd, email, dateBirth)
                VALUES (:nom, :prenom, 0, :pwd, :email, :dateBirth)';
        $req = $this->_db->prepare($sql);
        $req->execute(array(
            'nom' => $_POST['addName'],
            'prenom' => $_POST['addPre'],
            'pwd' => $hashedPass,
            'email' => $_POST['addMail'],
            'dateBirth' => $_POST['addBirth']
        ));
        $req->closeCursor();

        $sql2 = 'INSERT INTO datauser (Nom, Prenom, Hematie, Hemoglob, Hemato, PN, PE, PB, Lympho, Monocy, Plaquette) VALUES (:Nom, :Prenom, 0, 0, 0, 0, 0, 0, 0, 0, 0)';
        $req2 = $this->_db->prepare($sql2);
        $req2->execute(array(
            'Nom' => $_POST['addName'],
            'Prenom' => $_POST['addPre']
        ));
        $req2->closeCursor();
    }
}