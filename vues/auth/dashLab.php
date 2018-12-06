<?php
ob_start();

?>

<div class="row">

    <?php require 'vues/auth/asideCtrlPnl.php'; ?>
    <section class="dashLab ">
        
        <h2>Infos du moment :</h2>
        <br />
            <div class="row">
                <a class="twitter-timeline" data-height="650" data-width="500" href="https://twitter.com/CNRS?ref_src=twsrc%5Etfw">Tweets by CNRS</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <a class="twitter-timeline" data-height="650" data-width="500" href="https://twitter.com/CERN?ref_src=twsrc%5Etfw">Tweets by CERN</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>   
            </div>
        
    </section>

</div>



<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';

?>