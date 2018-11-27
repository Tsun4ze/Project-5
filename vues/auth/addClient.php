<?php
ob_start();

?>

<section class="add row">
<?php require 'vues/auth/asideCtrlPnl.php'; ?> 
    <div class="loginForm">
        <h2 class="loginTitle">Ajouter un nouveau patient :</h2>
        <br />

        <form action="index.php?act=newClient" method="post">
            <p>
                <div class="form-group">
                    <label for="">Nom : </label><br />
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="">Prenom : </label><br />
                    <input type="text" name="" id="" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="">Email : </label>
                    <input type="email" name="" id="" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="">Date de naissance : </label>
                    <input type="date" name="" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Mot de Passe : </label><br />
                    <input type="password" name="" id="" class="form-control">
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