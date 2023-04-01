<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Nicolas RENARD <nicolas.renard_at_etudiant.univ-brest.fr>
 * @version 1.0
 *
 * Controller de la page d'Accueil BACK-OFFICE.
 */

class Back_concours extends CI_controller  {
	
	/**
	 * Constructeur de la classe concours_admin.
	 * 
     */
	public function __construct()
	{
	parent::__construct();
	$this->load->model('db_model');
	$this->load->helper('url_helper');
	}
	/**
	 * Fonction d'affichage de la page des concours en back office.
	 * Permet l'affichage de toutes les concours en cours et accéder à leur détail
	 * 
     * @return $data tous les actualités en base
     */
	public function afficher()
	{
		
	$data['titre'] = 'Liste des concours :';
	$data['concours'] = $this->db_model->get_concours();	

	$this->load->view('templates/haut_back');
	$this->load->view('templates/menu_side_back');
	$this->load->view('templates/menu_haut_back');
	$this->load->view('page_concours_back', $data);
	$this->load->view('templates/bas_back');
	}
}
?>