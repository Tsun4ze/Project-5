<?php
ob_start();
?>
       
        <section class="jumbotron">
            <div class="title">
                <h2 class="display-4">Bienvenue</h2>
                <p class="lead">Le Laboratoire FuturLab, vous accompagnera dans le suivi de votre santé</p>
                <a type="button" class="btn btn-primary" href="#work">En savoir plus</a>
            </div>
            
        </section>

        <section class="bgMov">
            <video height="50%" width="100%" autoplay loop muted>
                <source src="public/mov/bg.mp4" type="video/mp4">
            </video>
        </section>
        
        <section class="work" id="work">
            <span style="color:#007bff;">
                <i class="fas fa-info-circle fa-5x"></i>
            </span>
            

            <h2>Notre mission :</h2>
            <br />
            <br />
            <div class="row justify-content-around workItems">
                <div>
                    <span style="color:#007bff;">
                        <i class="fas fa-syringe fa-3x"></i>
                    </span>
                    <h3>Item 1</h3>
                    <p>Random text. Random text. Random text. Random text. Random text. Random text. </p>
                </div>
                <div>
                    <span style="color:#007bff;">
                        <i class="fas fa-microscope fa-3x"></i>
                    </span>
                    <h3>Item 2</h3>
                    <p>Random text. Random text. Random text. Random text. Random text. Random text. </p>
                </div>
                <div>
                    <span style="color:#007bff;">
                        <i class="fas fa-calendar-check fa-3x"></i>
                    </span>
                    <h3>Item 3</h3>
                    <p>Random text. Random text. Random text. Random text. Random text. Random text. </p>
                </div>
            </div>
        </section>

<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
?>        