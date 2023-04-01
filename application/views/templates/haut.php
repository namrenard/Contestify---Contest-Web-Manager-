<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="application de gestion de concours en ligne">
    <meta name="author" content="nicolas.renard_at_univ-brest.fr">
    <link href="<?php echo base_url();?>style_front/images/favicon_logo.png" rel="icon" />
    <title>Contestify -</title>

    <!-- CSS FILES -->
    <link href="<?php echo base_url();?>style_front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style_front/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style_front/css/templatemo-kind-heart-charity.css" rel="stylesheet">
<body>
</head>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Siege social, route de l'espoir, 29800, France
                    </p>
                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:haha@company.com">contestify@award.com</a>
                    </p>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $this->config->base_url(); ?>">
                <img src="<?php echo base_url();?>style_front/images/logo.png" class="logo img-fluid" alt="contestify">
                <span>Contestify<small>l'application officielle des concours insolites en ligne !</small></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->config->base_url(); ?>index.php/accueil/afficher">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->config->base_url(); ?>index.php/concours/afficher">Concours</a>
                    </li>
<!-----
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->config->base_url(); ?>index.php/actualite/afficher_all">Actualités</a>
                    </li>
---->
                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Candidature</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                     <!----       
                     <li><a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/candidature/inscription">Inscription</a></li>
                            <li><a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/candidature/afficher/">Suivi</a></li>
                     ---->       
                            <li><a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/candidature/afficher/JbD1YH2qrXkkg6yjsMkB">Suivi (exemple)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="#">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>