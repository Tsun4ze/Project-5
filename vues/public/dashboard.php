<?php
ob_start();
?>

        <div class="row container-fluid login justify-content-around">

            <h2>Bonjour <?= $_SESSION['prenom']?> <?= $_SESSION['nom'] ?></h2>
        </div>

        <br />

        <div class="row justify-content-around">
        
            <a href="index.php?act=results" class="btn btn-primary">
                Mes derniers résultats en ligne
            </a>

            <br />

            <a href="index.php?act=PDF" target="_blank" class="btn btn-primary">
                Générer un document PDF
            </a>
        </div>
        
<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
?>