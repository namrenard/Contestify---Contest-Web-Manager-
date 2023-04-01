# CONTESTIFY - Online Contest Manager

## A propos
Contestify est une application de gestion de concours en ligne dématérialisé réalisé sous langage Php et avec une base de données relationnelle.

Le thème pour illustrer l'utilisation de la solution informatique concerne le gestion de concours de concours insolite au niveau mondiale.
L'application a pour but de créer et mettre en place plusieurs concours ou éditions de concours dans le but de l'effectuer à distance et de conserver toutes les caractéristiques d'un concours en présentiel.

Différents types d'utilisateurs sont autorisés à naviguer sur la plateforme et suivant leur attribution, il peuvent circuler sur la partie front office de l'application et/ou sur la partie back office de celle-ci.


## Installation

 Le système d'information suivant, demande l'installation et la possession d'un espace web sur serveur linux sur lequel seront déposés les fichiers de l'application disponible en téléchargement.
 - Le site a été testé sur un serveur debian  avec Apache version : Apache/2.4.52 (Debian) 
 - Version du serveur SGBD - Mariadb  version : 10.5.12-MariaDB-0+deb11u1 - Debian 11
 - Version PHP :  7.4.30
 - Administration via site web phpmyadmin version : 5.1.3
 
 > Avant de commencer, veuiller dans le fichier application/config/config.php, renseigner le path de votre serveur, dans la balise config['url'].

## Technologies utilisés pour le développement du système d'information "Contestify"

- [x] Bootstrap (front-end) -Theme KindArt Charity
- [x] MariaDB ( Base de données)
- [x] CodeIgniter version 3.1.13 (back-end)


## Auteur et remerciements

- Nicolas Renard -  Auteur
- Mme Valerie Marc - Product owner et coordinatrice projet (L3 project)

## License

Licence MIT.


## Feature

- [ ] v2.2 
    - V2.1 +
        - Inscription (saisie + validation + insertion des données dans la base de données) 
        - Annulation d’une
candidature  
        - Gestion de la pré-sélection (→ cf « User stories » Administrateur) 
        - Gestion de
la finale et du palmarès 
        - [[+ Optionnel → Ajout d’un concours 
Affichage des détails d’un concours 


## Changelog

- [x] v2.1
    - V2.0 + Suppression d’une candidature coté administration + 
    - Affichage de la galerie des candidatures pré-sélectionnées du concours choisi.
- [x] v2.0
    - Affichage, dans l’espace Administrateur, pour un concours choisi,
de toutes les candidatures selon leur état.
- [x] v1.2
    - V1.1 + Dans l’espace public, affichage d’une candidature via un
formulaire + suppression de la candidature visualisée
Dans l’espace « Administrateur », accès aux profils et création d’un
nouveau profil.
- [x] v1.1
    - V1.0 + Ouverture / fermeture de session « Membre du jury » et
« Administrateur »
    - accès aux informations de l’utilisateur connecté pour la
modification du mot de passe
    - Affichage des concours dans l’espace Administrateur / Jury
- [x] v1.0
    - Affichage :
        - des actualités sur la page d’accueil
        - des données de tous les concours passés / en cours / à venir
        - des données d’une candidature (+ documents associés)



