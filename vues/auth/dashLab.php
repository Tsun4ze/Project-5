<?php
ob_start();

?>



<section class="dashLab row">
    <?php require 'vues/auth/asideCtrlPnl.php'; ?>
    <h2>Main stuff</h2>
    <br />
        <div>
            
        </div>
    
</section>


<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';

?>