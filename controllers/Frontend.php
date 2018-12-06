<?php
require_once ('models/Database.php');
require_once ('models/Manager.php');
require_once ('models/DataUserManager.php');
require_once ('models/Session.php');

class Frontend
{
    function index()
    {
        require 'vues/public/indexView.php';
        
        
    }

    function userconnect()
    {
        require 'vues/public/login.php';
    }

    function dashboard()
    {
        require 'vues/public/dashboard.php';
    }
    
    function userResults()
    {
        $db = Projet5\models\Database::dbconnect();
        $dataList = new Projet5\models\DataUserManager($db);
        require 'vues/public/results.php';
    }

    function pdf()
    {
        
        
        require 'vues/common/createPDF.php';
    }
}