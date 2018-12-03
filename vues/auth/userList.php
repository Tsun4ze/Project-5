<?php
ob_start();
?>
<div class="row">

    <?php require 'vues/auth/asideCtrlPnl.php'; ?>

    <section class="listUser">

        <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date de Naissance</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($usrManager->getUsers() as $userInfo)
            {
            ?>
        
                <tr>
                <td><?=$userInfo->nom() ?></td>
                <td><?=$userInfo->prenom() ?></td>
                <td><?=$userInfo->dateBirth() ?></td>
                <td><?=$userInfo->email() ?></td>
                <td>
                    <form action="index.php?act=update&nm=<?= $userInfo->nom() ?>&pre=<?= $userInfo->prenom() ?>" method="post">
                        <input type="submit" name="updtUser" value="Modifier les résultats bio" class="btn btn-warning">
                    </form>
                </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </section>

</div>



<?php

$contentView = ob_get_clean();
require 'vues/common/main.php';

?>