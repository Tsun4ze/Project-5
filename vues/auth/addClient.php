<?php
ob_start();

?>

<section class="add row">
<?php require 'vues/auth/asideCtrlPnl.php'; ?> 
    <div class="loginForm">
        <h2 class="loginTitle">Ajouter un nouveau patient :</h2>
        <br />

        <form action="index.php?act=new" method="post">
            <p>
                <div class="form-group">
                    <label for="name">Nom : </label><br />
                    <input type="text" name="addName" id="name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="prename">Prenom : </label><br />
                    <input type="text" name="addPre" id="prename" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="mail">Email : </label>
                    <input type="email" name="addMail" id="mail" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="birth">Date de naissance : </label>
                    <input type="date" name="addBirth" id="birth" class="form-control">
                </div>

                <div class="form-group">
                    <label for="pass">Mot de Passe : </label><br />
                    <input type="password" name="addPwd" id="pass" class="form-control">
                </div>

                <br />

                <input type="submit" value="Ajouter" class="btn btn-primary">
            </p>
        </form>
    </div>
</section>

<?php

$contentView = ob_get_clean();

require 'vues/common/main.php';

?>