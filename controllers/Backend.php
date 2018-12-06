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

    public function userLab()
    {

        require 'vues/auth/dashLab.php';
    }

    public function userLablist()
    {
        $db = Database::dbconnect();
        $usrManager = New UserManager($db);

        require 'vues/auth/userList.php';
    }

    public function addClient()
    {
        require 'vues/auth/addClient.php';
    }

    public function newUser()
    {
        $db = Database::dbconnect();
        $userMgr = New UserManager($db);

        if(!empty($_POST['addName']) && !empty($_POST['addPre']) && !empty($_POST['addMail']) && !empty($_POST['addBirth']) && !empty($_POST['addPwd']))
        {
            $userMgr->addUser();
            $session = new Session();
            $session->setFlash('Utilisateur enregistré !', 'success');

            header('Location: index.php?act=usrList');
            exit();
        }
        else
        {
            $session = new Session();
            $session->setFlash('Un ou plusieurs champs sont vides !', 'warning');
        }
    }

    public function errorUser()
    {
        $session = new Session();
        $session->setFlash('Données non disponible.', 'warning');

        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit();
    }

    public function dataUser()
    {
        $db = Database::dbconnect();
        $dataManager = new DataUserManager($db);

        require 'vues/auth/uptDataClient.php';
    }

    public function updateUser()
    {
        $db = Database::dbconnect();
        $dataManager = new DataUserManager($db);

        $dataUpdate = new DataUser(array(
            'id' => $_POST['id'],
            'Hematie' => $_POST['hematie'],
            'Hemoglob' => $_POST['hemoglob'],
            'Hemato' => $_POST['hematocrite'],
            'PN' => $_POST['polNeu'],
            'PE' => $_POST['polEos'],
            'PB' => $_POST['polBas'],
            'Lympho' => $_POST['lympho'],
            'Monocy' => $_POST['mono'],
            'Plaquette' => $_POST['plaquette'],
        ));

        $dataManager->updDataUser($dataUpdate);

        $session = new Session();
        $session->setFlash('Mise à jour effectuée.', 'success');

        header('Location: index.php?act=usrList');
        exit();
    }
}