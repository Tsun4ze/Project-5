<?php
if(session_status() == PHP_SESSION_NONE) :
	session_start();
endif;

include 'models/autoload.php';

include 'controllers/Frontend.php';
include 'controllers/Backend.php';

$frontend = new Frontend();
$backend = new Backend();

try
{
    if(isset($_GET['act']) && !empty($_GET['act']))
    {
        if($_GET['act'] === 'login')
        {
            if(isset($_SESSION['logged']) && $_SESSION['logged'] === 'true')
            {
                if(isset($_SESSION['agLab']) && $_SESSION['agLab'] === 'on')
                {
                    header('Location: index.php?act=dashLab');
                    exit();
                }
                else
                {
                    header('Location: index.php?act=results');
                    exit();
                }
                
            }
            else
            {
                $backend->login();
            }
            
        }
        elseif($_GET['act'] === 'connect')
        {
            $frontend->userconnect();
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
        elseif($_GET['act'] === 'results')
        {
            $frontend->userResults();
        }
        elseif($_GET['act'] === 'PDF')
        {
            $frontend->pdf();
        }
        elseif($_GET['act'] === 'add')
        {
            $backend->addClient();
        }
        elseif($_GET['act'] === 'new')
        {
            $backend->newUser();
        }
        elseif($_GET['act'] === 'update')
        {
            if(isset($_GET['nm']) && isset($_GET['pre']))
            {
                $backend->dataUser();
            }
            else
            {
                $backend->errorUser();
            }
        }
        elseif($_GET['act'] === 'updtClient')
        {
            $backend->updateUser();
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
	

