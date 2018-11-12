<?php
ob_start();
?>

        <div class="row container-fluid login justify-content-around">

            <h1>HELLO THERE</h1>
            
        </div>
<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
?>