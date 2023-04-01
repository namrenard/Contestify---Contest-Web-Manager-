<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Nicolas RENARD <nicolas.renard_at_etudiant.univ-brest.fr>
 * @version 1.0
 *
 * Controller de la page concours
 */

class Concours extends CI_Controller {
	

	public function __construct(){
	parent::__construct();
	$this->load->model('db_model');
	$this->load->helper('url_helper');
	}
/**
	 * Fonction d'affichage de tous les concours.
	 * 
     * @return la requête d'affichage des concours
     */
	public function afficher(){
		$data['titre'] = 'Liste des concours :';
		$data['con'] = $this->db_model->get_all_concours();
		$this->load->view('templates/haut');
		$this->load->view('page_concours',$data);
		$this->load->view('templates/bas');
	}
}