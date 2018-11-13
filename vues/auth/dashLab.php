<?php
ob_start();

?>

<div class="row">

    <?php require 'vues/auth/asideCtrlPnl.php'; ?>
    <section class="dashLab ">
        
        <h2>Main stuff</h2>
        <br />
            <div>
                <p>
                    Maybe some news from the F society !
                </p>
            </div>
        
    </section>

</div>



<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';

?>