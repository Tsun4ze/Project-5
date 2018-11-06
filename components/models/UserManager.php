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

            $userInfo = array(
                'nom' => $userDB['nom'],
                'prenom' => $userDB['prenom'],
                'dateBirth' => $userDB['dateBirth'],
                'mail' => $user['email']
            );
            
            header('Location: ./dashboard/');
            exit();
        }
        else
        {
            $session = new Session();
            $session->setFlash('Indentifiants incorrect', 'danger');

            header('Location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
        
    }
}