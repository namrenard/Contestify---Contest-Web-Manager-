<h1><?php echo $titre;?></h1>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Concours</th>
    <th>Ouverture du concours</th>
    <th>Date de début de sélection</th>
    <th>Date de début d'évaluation</th>
    <th>Cloture du concours</th>
    <th>Phase du concours</th>
    <th>Accès au détail</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if ($concours != NULL){
    // Boucle de parcours de toutes les lignes du résultat obtenu
    foreach($concours as $con){

            ?>
            <tr>
            <td><?php echo $con['con_titre'];?></td>
            <td><?php echo $con['status_concours'];?></td>
            <td><?php echo $con['con_date_deb_concours'];?></td>
            <td><?php echo $con['con_date_selct'];?></td>
            <td><?php echo $con['con_date_final'];?></td>
            <td><?php echo $con['con_date_fin_concours'];?></td>
            <td><button type="button" class="btn btn-link btn-sm"disabled> Access</button></td>
            <tr>
            <?php }
    }
else {
echo "<br />";
echo "Aucun concours existants !";
}
?>
</tbody>
</table>