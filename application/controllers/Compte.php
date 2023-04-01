<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Nicolas RENARD <nicolas.renard_at_etudiant.univ-brest.fr>
 * @version 1.0
 * 
 * Controller pour la page d'administration des comptes.
 */

class Compte extends CI_Controller {
	
	/**
	 * Constructeur de la classe Compte
	 * 
     */
	public function __construct()
	{
	parent::__construct();
	$this->load->model('db_model');
	$this->load->helper('url_helper');
	}
	
	/**
	 * Fonction d'affichage de tous les comptes enregistrées.
	 * Les comptes sont ceux des jurys de concours et des organisateurs.
	 * 
     * @return $data tous les comptes en base
     */

	public function lister()
	{
	$data['titre'] = 'Liste des pseudos :';
	$data['pseudos'] = $this->db_model->get_all_compte();
	$this->load->view('templates/haut');
	$this->load->view('compte_liste',$data);
	$this->load->view('templates/bas');
	}

	/**
	 * Fonction d'affichage d'un compte utilisateur ciblé en back_office.
	 * Les comptes sont ceux des jurys de concours et des organisateurs.
	 * 
     * @return $data tous les comptes en base
     */

	public function get_compte($pseudo)
	{
		if ($id==FALSE)
	{ 
		$url=base_url(); 
		header("Location:$url");
	}
	else{
		$data['titre'] = 'Mon compte :';
		$data['cpt'] = $this->db_model->get_compte($pseudo);
		$this->load->view('templates/haut_back');
		$this->load->view('templates/menu_side_back');
		$this->load->view('templates/menu_haut_back');
		$this->load->view('page_mon_compte',$data);
		$this->load->view('templates/bas_back');
		}
	}

	/**
	 * Fonction d'affichage d'un compte utilisateur ciblé en back_office.
	 * Les comptes sont ceux des jurys de concours et des organisateurs.
	 * 
     * @return $data tous les comptes en base
     */
	public function creer()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'id', 'required');
		$this->form_validation->set_rules('mdp', 'mdp', 'required');
		if ($this->form_validation->run() == FALSE)
			{// Le formulaire est invalide
			$this->load->view('templates/haut_back');
			$this->load->view('templates/menu_side_back');
			$this->load->view('templates/menu_haut_back');
			$this->load->view('compte_creer');
			$this->load->view('templates/bas_back');
		}
		else
		{
		// Le formulaire est valide
			$this->db_model->set_compte();
			$data['le_compte']=$this->input->post('id');
			$data['le_message']="Nouveau nombre de comptes : ";
		
		//appel de la fonction créée dans le précédent tutoriel :
		
			$data['le_nombre']=$this->db_model->get_nb_comptes();
			$this->load->view('templates/haut_back');
			$this->load->view('templates/menu_side_back');
			$this->load->view('templates/menu_haut_back');
			$this->load->view('compte_succes',$data);
			$this->load->view('templates/bas_back');
		}
	}
}
?>