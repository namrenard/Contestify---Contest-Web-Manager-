<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="application de gestion de concours en ligne">
    <meta name="author" content="nicolas.renard_at_univ-brest.fr">

    <title>Contestify - page index</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">


</head>

<body id="section_1">

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Siege social, route du rire, 29800, France
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            contestify@award.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" class="logo img-fluid" alt="contestify">
                <span>
                    Contestify
                    <small>l'application officielle des concours en ligne !</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Acceuil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Les concours</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Les actualités</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Candidature</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="candidat.html">Inscription</a></li>

                            <li><a class="dropdown-item" href="candidat_suivi.html">Suivi dossier</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="connexion.html">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
<section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide/vecteezy_1st-place-champion-award-the-best-prize-and-winner-concept-championship-cup-or-winner-trophy-in-a-showroom-with-white-smoke_2547891.jpg"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1> Osez l'expèrience!</h1>

                                        <p>Profitez d'une application fluide, légère et simple d'utilisation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
        </section>
<?php
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

 <!--------SECTION 0------->
        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Bienvenue sur Contestify</h2>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 mb-8 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="concours.html" class="d-block">
                                <img src="images/icons/icons8-contest-64.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Voir les <strong>Concours</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 mb-8 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="candidat.html" class="d-block">
                                <img src="images/icons/icons8-political-party-64.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Proposer une <strong>Candidature</strong></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <!--------SECTION 1------->
        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images/slide/jeux-concours.jpg"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">A propos</h2>

                            <h5 class="mb-3">Contestify, l'application des concours en ligne !</h5>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Notre Mission</h5>

                                    <p>Vous permettre d'effectuer l’organisation de concours dématérialisés et à distance.</p>

                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Gestion des candidatures.
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Gestion des concours.
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Actualités.
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Back-office avec tchat interne.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="2021"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Année de création !</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number-text"> > </span>
                                            <span class="counter-number" data-from="1" data-to="150"
                                                data-speed="1000"></span>
                                        </div>
                                        <span class="counter-text"> concours déjà organisés !</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!--------SECTION 2------->
        <section class="about-section section-padding" id="section_3 ">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/causes/19-concours-et-courses-insolites-a-travers-le-monde.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h3 class="mb-0">Concours le plus populaire !</h3>

                            <p class="text-muted mb-lg-4 mb-md-4">"Concours mondial de grimaces "</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>
                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!--------SECTION 3------->
        <section class="section-padding section-bg" >
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Quelques concours!</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/11-batiments-insolites-crazy-house-pologne.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Concours de "concours insolites"</h5>
                                    <h6 class="mb-3">Edition 2021</h>
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Participez !</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/11-batiments-insolites-crazy-house-pologne.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Concours de "concours insolites"</h5>
                                    <h6 class="mb-3">Edition 2022</h>
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Participez !</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/vecteezy_1st-place.jpg"
                                class="custom-block-image img-fluid" alt="" style="width : 90%">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Concours de "concours insolites"</h5>
                                    <h6 class="mb-3">Edition 2023</h>
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Participez !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--------SECTION 4------->
        <section class=" news-section section-padding " id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/69722704_s.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            DATE 2021
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By AUTEUR
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">NEWS 1 !</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>T Aenean leo tortor, hendrerit sed varius vitae, molestie sed odio. Nunc sollicitudin sem vitae dolor tempus, ut euismod lectus hendrerit. Vestibulum fringilla ligula blandit elit gravida, sit amet pharetra metus volutpat. In eu viverra tortor. Morbi eget magna magna. Morbi ac neque in magna scelerisque dapibus. Pellentesque porta velit quis lectus ultricies placerat. Nam vel eleifend mi. Cras sit amet tempor nulla. Aenean a augue eu mi hendrerit posuere a rutrum justo. Suspendisse lacinia pretium eros nec consequat. Curabitur ultricies est tellus, in iaculis lectus porta a. Donec nec nibh interdum urna rutrum facilisis et eu arcu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/WEB_ConcoursNouvelles.png"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            DATE 2022
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Pré-selection terminées !</a>
                                    </h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit sed sapien consectetur euismod at vitae neque. Integer vestibulum imperdiet iaculis. Vivamus pretium malesuada aliquam. Integer quis ipsum vel lectus tristique posuere. Vivamus semper eget turpis eu posuere. Sed nec sollicitudin ante. Aenean diam dolor, volutpat sit amet pellentesque non, porttitor consectetur nibh. In consectetur feugiat urna eget elementum. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Actualité récentes</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/icons/icons8-fusée,-décollage-64.png"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Lancement concours Y</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        11 Novembre 2022
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/icons/icons8-les-oscars-64.png"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Palmares Concours X</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        12 Décembre 2022
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="category-block d-flex flex-column">
                            <h5 class="mb-3">Categories</h5>

                            <a href="#" class="category-block-link">
                                Concours 1
                                <span class="badge">20</span>
                            </a>
                            <a href="#" class="category-block-link">
                                Concours 2
                                <span class="badge">10</span>
                            </a>
                        </div>              
                    </div>
                </div>
            </div>
        </section>
        <!--------FOOTER------->
        <footer class="site-footer">
            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="copyright-text mb-0">Tous droits réservés © Contestify SAS 2023
                        &emsp;&emsp;&emsp; Mentions légales &emsp; Conditions générales de vente &emsp; Politique de confidentialité et cookies</p>

                    </div>
                </div>
            </div>
        </footer>


    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>

    <!--

Based on TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->