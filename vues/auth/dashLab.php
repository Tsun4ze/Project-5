<?php
ob_start();

?>


<?php require 'vues/auth/asideCtrlPnl.php'; ?>
<section class="dashLab row">
    
    <h2>Main stuff</h2>
    <br />
        <div>
            
        </div>
    
</section>


<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';

?>