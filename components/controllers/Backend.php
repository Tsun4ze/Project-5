<?php

class Backend
{
    public function login()
    {
        $db = Database::dbconnect();
        $usrManager = new UserManager($db);

        if(isset($_POST['vldLog']))
        {
            if((isset($_POST['usrLog'])) && (isset($_POST['pwdLog'])) && (!empty($_POST['usrLog'])) && (!empty($_POST['pwdLog'])))
            {
                $usrManager->checkLogin($_POST['usrLog'], $_POST['pwdLog']);
                $_SESSION['logged'] = 'true';

                
            }
            else
            {
                $session = new Session();
                $session->setFlash('L\'un des champs est vide.', 'warning');

                header('Location:'.$_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }
}