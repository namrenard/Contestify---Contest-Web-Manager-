 <main>
<section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo base_url();?>style_front/images/slide/vecteezy_1st-place-champion-award-the-best-prize-and-winner-concept-championship-cup-or-winner-trophy-in-a-showroom-with-white-smoke_2547891.jpg"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>   Osez participer!</h1>

                                        <p>Découvrez un palmarès de concours 
                                        <br />plus insolites les uns que les autres !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
        </section>
<!---<?php
echo ("Page Web OK\n");
// Connexion à la base MariaDB
$mysqli = new mysqli('localhost','zrenardni','nuuyypcc','zdl3-zrenardni_1');
if ($mysqli->connect_errno) {
 echo("Erreur de connection.\n");
}
//Préparation du mot de passe de l’utilisateur egroot
$userspassword = "toto123";
// On rajoute du sel...
// pour empêcher les attaques par "Rainbow Tables" cf
// http://en.wikipedia.org/wiki/Rainbow_table
$salt = "OnRajouteDuSelPourAllongerleMDP123!!45678__Test";
// Le mot de passe rallongé sera donc :
// OnRajouteDuSelPourAllongerleMDP123!!45678__TestCeciEstMonMotdePasse!123
$password = hash('sha256', $salt.$userspassword);
echo $password;
// Constitution par concaténation d'une requête UPDATE + exécution
$requete = "UPDATE t_compte_cpt SET cpt_mdp='".$password."' WHERE cpt_pseudo='egroot';";
echo($requete);
$resultat=$mysqli->query($requete);
/*Modification du mot de passe du profil de login egroot*/
if (!$resultat)
{
 echo("Erreur sur la requete.\n");
}
else
{
echo("ok sur la requete.\n");
}
//Fermeture de la communication avec la base MariaDB
$mysqli->close();
?>
--->
 <!--------SECTION 0------->
        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Bienvenue sur Contestify</h2>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 mb-8 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="<?php echo $this->config->base_url(); ?>index.php/concours/afficher" class="d-block">
                                <img src="<?php echo base_url();?>style_front/images/icons/icons8-contest-64.png" class="featured-block-image img-fluid" alt="">
                                <p class="featured-block-text">
                                    Voir les <strong>Concours</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 mb-8 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#" class="d-block">
                                <img src="<?php echo base_url();?>style_front/images/icons/icons8-political-party-64.png" class="featured-block-image img-fluid" alt="">
                                <p class="featured-block-text">Proposer une <strong>Candidature</strong></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <!--------SECTION 1------->
   
                 <!--------SECTION 2------->
        <section class="about-section section-padding" >
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="<?php echo base_url();?>style_front/images/causes/19-concours-et-courses-insolites-a-travers-le-monde.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h3 class="mb-0">Le concours le plus populaire du moment!</h3>

                            <p class="text-muted mb-lg-4 mb-md-4">"Concours mondial de grimaces "</p>

                            <p>Des participants du monde entier se rassemblent dans ce petit village de Cumbria pour exécuter leurs plus belles contorsions faciales.</p> 
                            <p>Les mimiques les plus grotesques sont utilisées pour impressionner les juges.<br/> Les langues tirées et les joues gonflées n'ont aucune chance.</p> <p>Le village d'Egremont organise ce concours depuis la fin du XIIIe siècle.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!---------------ACTUALITES 5--------------------->

        <section class=" section-padding section-bg" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Les dernières actualités!</h2>         
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de publication</th>
                                <th>Auteur</th>
                                <th>Contenus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($actu != NULL) {
                                foreach($actu as $act){ 
                                ?>
                                <tr>
                                <td><?php echo $act['TITRE'];?></td>
                                <td><?php echo $act['DATE_PUB'];?></td>
                                <td><?php echo $act['AUTEUR'];?></td>
                                <td><?php echo $act['TEXTE'];?></td>
                                </tr>
                                <?php }
                            }
                            else {
                                echo "<br />";
                                echo "Aucune actualitées !";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>




    <    <!---------------
        <section class=" section-padding section-bg" >
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Les Actualités!</h2> 
                </div>
                    <?php
                    if($actu != NULL) {
                        foreach($actu as $act){ ?>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="<?php echo base_url();?>style_front/images/causes/11-batiments-insolites-crazy-house-pologne.jpg"
                                    class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3"><?php echo $act["TITRE"];?></a></h5>
                                        <h6 class="mb-3"><i class="bi-calendar4 custom-icon me-1"></i><?php echo $act["DATE_PUB"];?>
                                        <i class="bi-person custom-icon me-1"></i>
                                                    <?php echo $act["AUTEUR"];?></h></h6>
                                        <p><?php echo $act["TEXTE"];?></p>
                                    </div>
                                    <a href="<?php echo $this->config->base_url(); ?>actualite/afficher/" class="custom-btn btn">Plus de détail !</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    }
                    else { echo "<br />";
                        echo "Aucune actualitées !";
                    }
                    ?>
                </div>
            </div>
        </section>
------------->





         <!--------SECTION 3------->
        <section class="section-padding ">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Quelques concours!</h2>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url();?>style_front/images/causes/11-batiments-insolites-crazy-house-pologne.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Concours de "concours insolites"</h5>
                                    <h6 class="mb-3">Edition 2021</h>
                                    <p>Un concours des concours qui démarre bien avec....</p>
                                </div>

                                <a href="#" class="custom-btn btn">Participez !</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url();?>style_front/images/causes/11-batiments-insolites-crazy-house-pologne.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Concours de "concours insolites"</h5>
                                    <h6 class="mb-3">Edition 2022</h>
                                    <p>C'est parti pour la seconde édition de ce concours des concours...</p>
                                </div>

                                <a href="#" class="custom-btn btn">Participez !</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="<?php echo base_url();?>style_front/images/causes/vecteezy_1st-place.jpg"
                                class="custom-block-image img-fluid" alt="" style="width : 90%">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Concours de "concours insolites"</h5>
                                    <h6 class="mb-3">Edition 2023</h>
                                    <p>Troisième édition tout aussi attendu pour ce concours des concours... </p>
                                </div>

                                <a href="#" class="custom-btn btn">Participez !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    

 </main>