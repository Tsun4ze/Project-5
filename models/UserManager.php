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
}