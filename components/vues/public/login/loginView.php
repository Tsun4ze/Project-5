<?php
require '../components/models/autoload.php';
$session = new Session();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login - Test page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../components/public/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    </head>

    <body>
        <header class="header fixed-top">
            <a href="../"><img src="../components/public/img/logo.png" alt="Logo" /></a>
        </header>
        <?= $session->flash(); ?>
        <div class="row container-fluid login justify-content-around">
        
            <section>
                <h2>Random Stuff:</h2>
                <p>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                    Follow the step. <br/>
                </p>
            </section>

            <section>
                <div class="loginForm">
                    <h2 class="loginTitle">Identification:</h2>
                    <br />

                    <form action="../index.php?act=login" method="post">
                        <p>
                            <div class="form-group">
                                <label for="user">Identifiant : </label><br />
                                <input type="text" name="usrLog" id="user" class="form-control formInput" placeholder="E-mail">
                            </div>
                            
                        <div class="form-group">
                                <label for="pass">Mot de passe : </label><br/>
                                <input type="password" name="pwdLog" id="pass" class="form-control formInput">
                        </div>
                            
                            <br/>
                            <br/>

                            <input type="submit" value="Connexion" name="vldLog" class="btn btn-primary">
                        </p>
                    </form>
                </div>
            </section>
            
        </div>
        

        <footer>
        
            <h5>C'est la fin ! (ou pas) </h5>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>