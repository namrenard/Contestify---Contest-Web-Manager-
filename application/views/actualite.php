<?php
if ($actu != NULL){
?>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Auteur</th>
    <th>Actualités de l'auteur</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Boucle de parcours de toutes les lignes du résultat obtenu
    foreach($actu as $a){
        // Affichage d’une ligne de tableau pour un pseudo non encore traité
        if (!isset($traite[$a["cpt_pseudo"]])){
            $cpt_id=$a["cpt_pseudo"];
            echo "<tr>";
            echo "<td>";echo $a["cpt_pseudo"];echo "</td>";
            echo "<td>";
            // Boucle d’affichage des actualités liées au pseudo
            foreach($actu as $act){
            echo "<ul>";
            if(strcmp($cpt_id,$act["cpt_pseudo"])==0){
            echo "<li>";
            echo $act["act_texte"];
            echo " -- ";
            echo $act["act_date"];echo "</li>";
        }
    echo "</ul>";
    }
    echo "</td>";
    // Conservation du traitement du pseudo
    // (dans un tableau associatif dans cet exemple !)
    $traite[$a["cpt_pseudo"]]=1;
    echo "</tr>";
    }
}
}
else {
echo "<br />";
echo "Aucune actualitées !";
}
?>
</tbody>
</table>
