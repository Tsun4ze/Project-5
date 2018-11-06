<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Test page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="components/public/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    </head>

    <body>
        <header class="header fixed-top">
            <img src="components/public/img/logo.png" alt="Logo" />
        </header>
        
        <section class="jumbotron">
            <div class="title">
                <h2 class="display-4">Bienvenue</h2>
                <p class="lead">Le Laboratoire FuturLab, vous accompagnera dans le suivi de votre santé</p>
                <a type="button" class="btn btn-primary" href="#work">En savoir plus</a>
            </div>
            
        </section>

        <section class="bgMov">
            <video height="50%" width="100%" autoplay loop muted>
                <source src="components/public/mov/bg.mp4" type="video/mp4">
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

        <footer>
            <h5>C'est la fin ! (ou pas) </h5>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>