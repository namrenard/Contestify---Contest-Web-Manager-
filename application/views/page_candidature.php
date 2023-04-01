<?php
    //print_r($candidat);
    if (in_array("", $candidat[0]))  {?>
        <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h3 class="mb-2">
                                <?php echo "Candidature inconnue."; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
<?php
    }
    else {
        $candidat_p='P';
        $candidat_w='W';

        foreach($candidat as $can){ ?>
             <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                            <img src="<?php echo base_url();?>style_front/images/bg/candidature.jpg"
                            class="custom-text-box-image img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h3 class="mb-2"><?php echo $titre;?></h3>
                                <h6 class="mb-3"> <?php echo $can['con_titre'];?></h6>
                                <h5 class="mb-1">Catégorie : &emsp;<?php echo $can['cat_titre'];?></h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <h5 class="mb-3">Identité</h5>
                                        <ul class="custom-list mt-2">
                                            <li class="custom-list-item d-flex"><i class="bi bi-arrow-right-square-fill custom-text-box-icon me-2"></i><strong><?php echo $can['can_nom'];?></strong>
                                            </li>
                                            <li class="custom-list-item d-flex"><i class="bi bi-arrow-right-square-fill custom-text-box-icon me-2"></i><?php echo $can['can_prenom'];?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <ul class="custom-list mt-2">
                                            <h5 class="mb-3">Coordonnées</h5>
                                            <li class="custom-list-item d-flex"><i class="bi bi-arrow-right-square-fill custom-text-box-icon me-2"></i><?php echo $can['can_adresse']; ?>
                                            <br />
                                            <?php echo $can['can_code_postal']." ".$can['can_ville']; ?>
                                             <br />
                                             <?php echo $can['can_pays']; ?>
                                            </li>
                                            <li class="custom-list-item d-flex"><i class="bi bi-arrow-right-square-fill custom-text-box-icon me-2"></i><?php echo $can['can_prefixe_tel']." ".$can['can_num_tel']; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <br />
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <h5 class="mb-3">Contact</h5>
                                        <i class="bi bi-arrow-right-square-fill custom-text-box-icon me-2"></i><?php echo $can['can_email'];?>
                                    </div>
                                </div>  
                                <div class="col-lg-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">Etat candidature</h5>
                                        <p style="text-align: center;"><strong><?php if(strcmp($candidat_p, $can['can_status']) == 0){ 
                                        echo "ACCEPTE";
                                        } elseif (strcmp($candidat_w, $can['can_status']) == 0){
                                        echo"EN ATTENTE";
                                        } else {
                                        echo" ANNULEE";
                                        }?>
                                        </strong></p>
                                    </div>
                                </div>          
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">Documents</h5>
                                         <ul>
                                         <?php
                                            $docs = explode(';',$can['document']); // separer les documents en éléments.
                                             foreach ($docs as $d) {
                                                if (substr($d, 0, 4 ) == "http"){
                                                   echo "<li><a href='".$d."'>".$d."</a></li>"; 
                                               }else {
                                                   echo "<li><a href='".$this->config->base_url()."documents/".$d."'>".$d."</a></li>";
                                               }
                                            }?>
                                        </ul>    
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <br />
                                    <br />
                                        <button type="button" class="btn btn-outline-dark">Supprimer candidature</button>
                                </div>
                            </div>
                    </div>
            </section>
    <?php }
}  ?> 