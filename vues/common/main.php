<?php
$session = new Projet5\models\Session();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FuturLab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="public/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    </head>

    <body>
        <header class="header fixed-top">
        
            <div class="row justify-content-between">
                <a href="index.php"><img src="public/img/logo.png" alt="Logo" /></a>
                <div class="row headerConnect">
                    <i class="fas fa-user fa-x"></i>
                    <?php
                        if(isset($_SESSION['logged']) && $_SESSION['logged'] === 'true')
                        {
                            echo '<h5><a href="index.php?act=login">Profil</a></h5>';
                        }
                        else
                        {
                            echo '<h5><a href="index.php?act=connect">Connexion</a></h5>';
                        }
                        ?>
                    
                </div>
            </div>
            
        </header>
        
        <?= $session->flash(); ?>

        <?= $contentView ?> 

        <footer>
            <div class="row justify-content-between">
                <h6>FuturLab, all rights reserved <span><i class="fas fa-copyright"></i></span> </h6>
                <?php
                if(isset($_SESSION['logged']) && $_SESSION['logged'] === 'true')
                {
                    echo '<a href="index.php?act=disconnect">Deconnexion</a>';
                }
                ?>
            
            
            </div>
            
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <script>

            <?php
                $query10 = $db->prepare('SELECT Hematie, Hemoglob, Hemato, PN, PE, PB, Lympho, Monocy, Plaquette FROM datauser WHERE Nom = :userNom AND Prenom = :userPrenom');
                $query10->bindValue(':userNom', $_SESSION['nom'], PDO::PARAM_STR);
                $query10->bindValue(':userPrenom', $_SESSION['prenom'], PDO::PARAM_STR);
                $query10->execute();
                 
                $row10 = $query10->fetch();
                   
                
            ?>        


            // Load the Visualization API and the corechart package.
            google.charts.load('current', {'packages':['bar']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() 
            {

            var options = {
                bars: 'vertical',
                vAxis: {format: 'decimal'},
                colors: ['#1b9e77', '#007bff', '#cc0000']
            };

            // Create the data Table
            var data = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Hematie',4.50, <?= $row10['Hematie'] ?>, 6.50]
            ]);
            
            var data2 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Hemoglobine',13.0, <?= $row10['Hemoglob'] ?>, 17.0]
            ]);
            var data3 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Hematocrite',40, <?= $row10['Hemato'] ?>, 54]
            ]);
            var data4 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Polynucléaires Neutro',2000, <?= $row10['PN'] ?>, 7500]
            ]);
            var data5 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Polynucléaires Eosino',0, <?= $row10['PE'] ?>, 500]
            ]);
            var data6 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Polynucléaires Baso',0, <?= $row10['PB'] ?>, 200]
            ]);
            var data7 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Lymphocytes',1000, <?= $row10['Lympho'] ?>, 4000]
            ]);
            var data8 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Monocytes',200, <?= $row10['Monocy'] ?>, 1000]
            ]);
            var data9 = new google.visualization.arrayToDataTable([
                [   {label: 'Examen', id: 'Examen'},
                    {label: 'Normes (min)', id: 'MinNormes'},
                    {label: 'Resultats', id: 'Resultats'},
                    {label: 'Normes (max)', id: 'MaxNormes'}],
                ['Plaquettes',150000, <?= $row10['Plaquette'] ?>, 400000]
            ]);
            

           /*  //Actual Live test
            var dataTest = new google.visualization.DataTable([
                ['ExamenTest', 'Resultat_Test', 'Normes_Test'],
                ['Alpha', 99, 20],
                ['Beta', 69, 71],
                ['Delta', 10, 50]
            ]); */

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.charts.Bar(document.getElementById('chart_div'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div2'));
            chart.draw(data2, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div3'));
            chart.draw(data3, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div4'));
            chart.draw(data4, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div5'));
            chart.draw(data5, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div6'));
            chart.draw(data6, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div7'));
            chart.draw(data7, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div8'));
            chart.draw(data8, google.charts.Bar.convertOptions(options));
            var chart = new google.charts.Bar(document.getElementById('chart_div9'));
            chart.draw(data9, google.charts.Bar.convertOptions(options));
            }
        </script>

    </body>
</html>