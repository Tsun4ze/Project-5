<?php
require_once ('models/Database.php');
require_once ('models/Manager.php');
require_once ('models/User.php');
require_once ('models/UserManager.php');
require_once ('models/DataUser.php');
require_once ('models/DataUserManager.php');
require_once ('models/Session.php');

class Backend
{
    public function login()
    {
        $db = Projet5\models\Database::dbconnect();
        $usrManager = new Projet5\models\UserManager($db);

        if(isset($_POST['vldLog']))
        {
            if((isset($_POST['usrLog'])) && (isset($_POST['pwdLog'])) && (!empty($_POST['usrLog'])) && (!empty($_POST['pwdLog'])))
            {
                $usrManager->checkLogin($_POST['usrLog'], $_POST['pwdLog']);
                

                
            }
            else
            {
                $session = new Projet5\models\Session();
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
        $db = Projet5\models\Database::dbconnect();
        $usrManager = New Projet5\models\UserManager($db);

        require 'vues/auth/userList.php';
    }

    public function addClient()
    {
        require 'vues/auth/addClient.php';
    }

    public function newUser()
    {
        $db = Projet5\models\Database::dbconnect();
        $userMgr = New Projet5\models\UserManager($db);

        if(!empty($_POST['addName']) && !empty($_POST['addPre']) && !empty($_POST['addMail']) && !empty($_POST['addBirth']) && !empty($_POST['addPwd']))
        {
            $userMgr->addUser();
            $session = new Projet5\models\Session();
            $session->setFlash('Utilisateur enregistré !', 'success');

            header('Location: index.php?act=usrList');
            exit();
        }
        else
        {
            $session = new Projet5\models\Session();
            $session->setFlash('Un ou plusieurs champs sont vides !', 'warning');
        }
    }

    public function errorUser()
    {
        $session = new Projet5\models\Session();
        $session->setFlash('Données non disponible.', 'warning');

        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit();
    }

    public function dataUser()
    {
        $db = Projet5\models\Database::dbconnect();
        $dataManager = new Projet5\models\DataUserManager($db);

        require 'vues/auth/uptDataClient.php';
    }

    public function updateUser()
    {
        $db = Projet5\models\Database::dbconnect();
        $dataManager = new Projet5\models\DataUserManager($db);

        $dataUpdate = new Projet5\models\DataUser(array(
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

        $session = new Projet5\models\Session();
        $session->setFlash('Mise à jour effectuée.', 'success');

        header('Location: index.php?act=usrList');
        exit();
    }
}