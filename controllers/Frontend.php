<?php

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
        $db = Database::dbconnect();
        $dataList = new DataUserManager($db);
        require 'vues/public/results.php';
    }
}