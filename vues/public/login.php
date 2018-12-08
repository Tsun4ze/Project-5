<?php
ob_start();

?>
        <div class="row container-fluid login justify-content-around">
        
            <section>
                <h2>Information :</h2>
                <p>
                    Vous avez reçu, <br/>
                    par courrier ou via un agent de FuturLab<br/>
                    les informations vous permettant<br/>
                    de consulter vos résultats<br/>
                    sur cette plateforme.<br/>
                    <br/>
                    <br />
                    Utilisez les identifiants içi,<br />
                    pour pouvoir vous connecter.
                </p>
            </section>

            <section >
                <div class="loginForm">
                    <h2 class="loginTitle">Identification:</h2>
                    <br />

                    <form action="index.php?act=login" method="post">
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

<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
?>
       