<?php
ob_start();
?>

        <div class="row container-fluid login justify-content-around">

            <h2>Bonjour <?= $_SESSION['prenom']?></h2>
            <p><?= $_SESSION['nom'] ?></p>
            
        </div>
        <a href="index.php?act=results"><p>Mes derniers résultats</p></a>
<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
?>