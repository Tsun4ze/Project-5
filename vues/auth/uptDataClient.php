<?php
ob_start();
?>

<section class="row">
<?php require 'vues/auth/asideCtrlPnl.php'; ?>

    <?php 
        foreach($dataManager->getDataUser($_GET['nm'], $_GET['pre']) as $dataUpt)
        {
    ?>

    <div class="listUser">
        <h2 class="loginTitle"> Modifier les résultats de <?= $dataUpt->Nom() ?> <?= $dataUpt->Prenom() ?>:</h2>
        <br />
            

        <form action="" method="post">
        
        <p>
            <div class="row">
                <div class="form-group">
                    <label for="hematie">Hematie :</label><br />
                    <input type="text" name="hematie" id="hematie" class="form-control" value="<?= $dataUpt->Hematie() ?>" style="width: 35%;"/>
                </div>

                <div class="form-group">
                    <label for="hemo">Hémoglobine : </label><br />
                    <input type="text" name="hemoglob" id="hemo" class="form-control" value="<?= $dataUpt->Hemoglob() ?>" style="width: 35%;" />
                </div>

                <div class="form-group">
                    <label for="hemato">Hématocrite : </label>
                    <input type="text" name="hematocrite" id="hemato" class="form-control" value="<?= $dataUpt->Hemato() ?>" style="width: 35%;"/>
                </div>

                <div class="form-group">
                    <label for="pn">Polynucléaires Neutropiles : </label>
                    <input type="text" name="polNeu" id="pn" class="form-control" value="<?= $dataUpt->PN() ?>" style="width: 35%;">
                </div>

                <div class="form-group">
                    <label for="pe">Polynucléaires Eosinophiles : </label><br />
                    <input type="text" name="polEos" id="pe" class="form-control" value="<?= $dataUpt->PE() ?>" style="width: 35%;">
                </div>

                <div class="form-group">
                    <label for="pb">Polynucléaires Basophiles : </label><br />
                    <input type="text" name="polBas" id="pb" class="form-control" value="<?= $dataUpt->PB() ?>" style="width: 35%;">
                </div>

                <div class="form-group">
                    <label for="lymp">Lymphocytes : </label><br />
                    <input type="text" name="lympho" id="lymp" class="form-control" value="<?= $dataUpt->Lympho() ?>" style="width: 35%;">
                </div>

                <div class="form-group">
                    <label for="monocy">Monocytes : </label><br />
                    <input type="text" name="mono" id="monocy" class="form-control" value="<?= $dataUpt->Monocy() ?>" style="width: 35%;">
                </div>

                <div class="form-group">
                    <label for="plaq">Plaquettes : </label><br />
                    <input type="text" name="plaquette" id="plaq" class="form-control" value="<?= $dataUpt->Plaquette() ?>"style="width: 35%;">
                </div>
            </div>
                <br />

                <input type="submit" value="Modifier" class="btn btn-info">

        </form>
    </div>

    <?php
        }
    ?>
</section>

<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';