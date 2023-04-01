<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Nicolas RENARD <nicolas.renard_at_etudiant.univ-brest.fr>
 * @version 1.0
 *
 * Controller de la page d'Accueil.
 */

class Accueil extends CI_controller  {
	
	/**
	 * Constructeur de la classe Accueil.
	 * 
     */
	public function __construct()
	{
	parent::__construct();
	$this->load->model('db_model');
	$this->load->helper('url_helper');
	}

		/**
	 * Fonction d'affichage des 5 dernières actualités.
	 * 
     * 
     * @return la requete d'affichage de toutes les actualités
     */
	public function afficher(){
		$data['titre'] = 'Liste des dernières actualités :';
		$data['actu'] = $this->db_model->get_last_5_actualites();
		$this->load->view('templates/haut');
		$this->load->view('page_accueil',$data);
		$this->load->view('templates/bas');
	}
}
?>