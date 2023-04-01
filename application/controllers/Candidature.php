<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Nicolas RENARD <nicolas.renard_at_etudiant.univ-brest.fr>
 * @version 1.0
 *
 * Controller de la page candidature
 */

class Candidature extends CI_Controller {
	
	/**
	 * Constructeur du controller.
	 * 
     */
	public function __construct()
	{
	parent::__construct();
	$this->load->model('db_model');
	$this->load->helper('url_helper');
	}
	/**
	 * Fonction d'affichage d'une candidature.
	 * 
     * @param $code_inscription le code du dossier
     * @param $code_identification le code de l'inscription
     * @return la candidature.
     */
	public function afficher($code_inscription=FALSE)
	{
		if ($code_inscription==FALSE)
		{ 
		$url=base_url(); 
		header("Location:$url");
		}
		else{
			$data['titre'] = 'Votre candidature :';
			$data['candidat'] = $this->db_model->get_candidature($code_inscription);
			$this->load->view('templates/haut');
			$this->load->view('page_candidature',$data);
			$this->load->view('templates/bas');
			}
	}
	/**
	 * 
	 * Fonction de connexion à la page de suivi d'une candidature
	 */
	public function connexion()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('code_inscription', 'code_inscription', 'required');
		//$this->form_validation->set_rules('code_identification', 'code_identification', 'required');
	if ($this->form_validation->run() == FALSE)
		{
		// Le formulaire est invalide
		$this->load->view('templates/haut');
		$this->load->view('candidature_connexion');
		$this->load->view('templates/bas');
		}
	else
		{
		// Le formulaire est valide
		$this->db_model->get_candidature2();
		$data['titre'] = 'Votre candidature :';
		$data['candidat'] = $this->input->post('code_inscription');
		//$data['candidat']=$this->input->post('code_identification');
		$this->load->view('templates/haut');
		$this->load->view('page_candidature',$data);
		$this->load->view('templates/bas');
	}
}



}