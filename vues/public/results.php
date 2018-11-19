<?php
ob_start();
?>

<section class="login">

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            
            <th scope="col">Examen</th>
            <th scope="col">Votre Resultat</th>
            <th scope="col">Normes</th>
            
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($dataList->getUserResults() as $dataUser)
            {
            ?>
        
                <tr>
                    <td>Hématies</td>
                    <td><?= $dataUser->Hematie() ?> M/mm3</td>
                    <td>(4.50 à 6.50)</td>
                    
                </tr>

                <tr>
                    <td>Hémoglobine</td>
                    <td><?= $dataUser->Hemoglob() ?> g/100ml</td>
                    <td>(13.0 à 17.0)</td>
                    
                </tr>

                <tr>
                    <td>Hématocrite</td>
                    <td><?= $dataUser->Hemato() ?> %</td>
                    <td>(40.0 à 54.0)</td>
                    
                </tr>

                <tr>
                    <td>Polynucléaires Neutrophiles</td>
                    <td><?= $dataUser->PN() ?> /mm3</td>
                    <td>(2000 à 7500)</td>
                    
                </tr>

                <tr>
                    <td>Polynucléaires Eosinophiles</td>
                    <td><?= $dataUser->PE() ?> /mm3</td>
                    <td>(< à 500)</td>
                    
                </tr>

                <tr>
                    <td>Polynucléaires Basophiles</td>
                    <td><?= $dataUser->PB() ?> /mm3</td>
                    <td>(< à 200)</td>
                    
                </tr>

                <tr>
                    <td>Lymphocytes</td>
                    <td><?= $dataUser->Lympho() ?> /mm3</td>
                    <td>(1000 à 4000)</td>
                    
                </tr>

                <tr>
                    <td>Monocytes</td>
                    <td><?= $dataUser->Monocy() ?> /mm3</td>
                    <td>(200 à 1000)</td>
                    
                </tr>

                <tr>
                    <td>Plaquettes</td>
                    <td><?= $dataUser->Plaquette() ?> /mm3</td>
                    <td>(150 000 à 400 000)</td>
                    
                </tr>

                
            <?php
            }
            ?>
        </tbody>
    </table>

</section>

<?php
$contentView = ob_get_clean();
require 'vues/common/main.php';
?>