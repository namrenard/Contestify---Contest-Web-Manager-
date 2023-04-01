h1><?php echo $titre;?></h1>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Rôle</th>
    <th>Discipline</th>
    <th>Biographie</th>
    <th>Site Web</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if ($cpt != NULL){
            ?>
            <tr>
            <td><?php echo $cpt->pro_nom;?></td>
            <td><?php echo $cpt->pro_prenom;?></td>
            <td><?php echo $cpt->pro_role;?></td>
            <td><?php echo $cpt->pro_discipline;?></td>
            <td><?php echo $cpt->pro_biographie;?></td>
            <td><?php echo $cpt->pro_site_web;?></td>
            <tr>
            <button type="button" class="btn btn-link btn-sm"disabled> Modifier</button>
            
            <?php }
    }
else {
echo "<br />";
echo "Aucun compte sélectionné !";
}
?>
</tbody>
</table>