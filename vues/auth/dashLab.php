<?php
ob_start();

?>



<section>

    <h2>Main stuff</h2>

</section>


<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
require 'vues/auth/asideCtrlPnl.php';
?>