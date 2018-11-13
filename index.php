<?php
if(session_status() == PHP_SESSION_NONE) :
	session_start();
endif;

require 'models/autoload.php';
require 'controllers/Frontend.php';
require 'controllers/Backend.php';

$frontend = new Frontend();
$backend = new Backend();

try
{
    if(isset($_GET['act']) && !empty($_GET['act']))
    {
        if($_GET['act'] === 'login')
        {
            $backend->login();
        }
        elseif($_GET['act'] === 'connect')
        {
            $frontend->userconnect();
        }
        elseif($_GET['act'] === 'dashboard')
        {
            $frontend->dashboard();
        }
        elseif($_GET['act'] === 'dashLab')
        {
            $backend->userLab();
        }
        elseif($_GET['act'] === 'disconnect')
        {
            session_destroy();

            header('Location: ./');
            exit();
        }
        elseif($_GET['act'] === 'usrList')
        {
            $backend->userLabList();
        }
    }
    
    else
    {
        $frontend->index();
    }
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
}
	

