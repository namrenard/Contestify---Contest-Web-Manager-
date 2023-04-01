
<h1><?php echo $titre;?></h1>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Concours</th>
    <th>Organisateur</th>
    <th>Jurys</th>
    <th>Catégories</th>
    <th>Ouverture du concours</th>
    <th>Status</th>
    <th>Inscription</th>
    <th>Galerie des Sélectionnés</th>
    <th>Palmares</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if ($con != NULL){
    // Boucle de parcours de toutes les lignes du résultat obtenu
    foreach($con as $act){
            $phase_ins = 'INSCRIPTION';
            $phase_slt = 'SELECTION';
            $phase_finale = 'FINALE';
            $phase_fin = 'TERMINE';

            ?>
            <tr>
            <td><a href="#"><?php echo $act['TITRE'];?><a></td>
            <td><?php echo $act['ORGANISATEUR'];?></td>
            <td><ul><?php 
            $jurys = explode(';',$act['JURYS']); // separer les jurys en éléments.
                foreach ($jurys as $j) {
                    if($j != null){
                    echo "<li>".$j."</li>";}
                    else{
                    echo " Aucun membre du jury " ;}
                }?>
                    </ul>
                </td>
            <td><ul><?php 
            $cats = explode(';', $act['CATEGORIE']);
            foreach($cats as $c){
                if($c != null){
                    echo "<li>".$c."</li>" ;}
                else{
                    echo " Aucune catégorie " ;}

            }?></ul></td>

            <td><?php echo $act['DATE_DEBUT'];?></td>
            <td><?php echo $act['STATUS_CONCOURS'];?></td>
            <td>
                <?php
                if(strcmp($phase_ins, $act['STATUS_CONCOURS']) == 0){?>
                    <button type="button" class="btn btn-outline-primary">Candidatez</button></td><?php
            }?><td>
                <?php
                if(strcmp($phase_slt, $act['STATUS_CONCOURS'])== 0 || strcmp($phase_finale, $act['STATUS_CONCOURS']) == 0 || strcmp($phase_fin, $act['STATUS_CONCOURS']) == 0){?>
                <button type="button" class="btn btn-outline-success">Galerie</button></td><?php
            }?><td>
                <?php
                if(strcmp($phase_fin, $act['STATUS_CONCOURS']) == 0){?>
                <button type="button" class="btn btn-outline-warning">Palmarès</button></td><?php
            }?></tr>
        <?php }
    }
else {
echo "<br />";
echo "Aucun concours existant !";
}
?>
</tbody>
</table>
