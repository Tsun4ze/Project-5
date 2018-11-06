<?php
if(session_status() == PHP_SESSION_NONE) :
	session_start();
endif;

require 'components/models/autoload.php';
require 'components/controllers/Frontend.php';
require 'components/controllers/Backend.php';

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
    }
    
    /* elseif(isset($_GET['login'] === 'true'))
    {
         ... 
    } */
    else
    {
        return $frontend->index();
    }
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
}
	

