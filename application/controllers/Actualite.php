<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Nicolas RENARD <nicolas.renard_at_etudiant.univ-brest.fr>
 * @version 1.0
 *
 * Controller de la page actualité
 */

class Actualite extends CI_Controller {
	

	public function __construct()
	{
	parent::__construct();
	$this->load->model('db_model');
	$this->load->helper('url_helper');
	}
/**
	 * Fonction d'affichage de la page d'acceuil.
	 * Permet l'affichage de toutes les actualités
	 * 
     * @return $data tous les actualités en base
     */
	public function afficher_all()
	{
	
	$data['actu'] = $this->db_model->get_all_actualites();

	$this->load->view('templates/haut');
	$this->load->view('actualite',$data);
	$this->load->view('templates/bas');
	}

	/**
	 * Fonction d'affichage d'une actualité ciblée.
	 * 
     * @param $numero Le numero désignant l'actualité ciblée
     * @return l'actualité en question.
     */
	public function afficher($numero =FALSE)
	{
		if ($numero==FALSE)
	{ 
		$url=base_url(); 
		header("Location:$url");
	}
	else{
		$data['titre'] = 'Actualité :';
		$data['actu'] = $this->db_model->get_actualite($numero);
		$this->load->view('templates/haut');
		$this->load->view('actualite_afficher',$data);
		$this->load->view('templates/bas');
		}
	}
}
?>
