<?php
/**
 * @version 1.0
 * @author Nicolas RENARD 
 *  
 */
class Db_model extends CI_Model {
	
	/**
	 * Constructeur de la classe Db_model 
	 * 
	 */
	public function __construct()
	{
		$this->load->database();
	}
	
	////////////////////// ACTUALITE ///////////////////////////////
	/**
	 * Fonction de requête d'affichage d'une actualité en particulier.
	 * 
	 * @param $numero l'identifiant de l'actualité.
	 * @return $query la requete contenant l'actualité ciblée par le $numero. 
	 * 
	 */

	public function get_actualite($numero)
	{
		$query = $this->db->query("SELECT act_titre,act_texte FROM t_actualite_act WHERE
		t_actualite_act.act_id=".$numero.";");
		return $query->row();
	}
	/**
	 * Fonction de requête d'affichage de toute les actualités.
	 * 
	 * @return $query la requete contenant l'intégralité des l'actualités de tous les concours. 
	 * 
	 */
	
	public function get_all_actualites()
	{
		$req="CALL actu_totale();";
		$query = $this->db->query($req);
		return $query->result_array();
	}
	/**
	 * Fonction de requête d'affichage des 5 dernières actualités sur la page d'acceuil.
	 * 
	 * @return $query la requete contenant les 5 dernières actualités. 
	 * 
	 */
	public function get_last_5_actualites()
	{
		$req="SELECT * FROM `ACTU_5DESC` ;";
		$query = $this->db->query($req);
		return $query->result_array();
	}
	////////////////////// CONCOURS ///////////////////////////////
	/**
	 * Fonction de requête d'affichage de tous les concours.
	 * 
	 * @return $query la requete contenant tous les concours + leur phases + les infos jurys/organisateurs. 
	 * 
	 */
	public function get_all_concours()
	{
		$req="SELECT * FROM `LISTE_TOTAL_CONCOURS_PHASES_MEMBRES` ORDER BY LISTE_TOTAL_CONCOURS_PHASES_MEMBRES.DATE_DEBUT ASC;";
		$query = $this->db->query($req);
		return $query->result_array();
	}

	////////////////////// CANDIDATURE ///////////////////////////////
	/**
	 * Fonction de recuperation d'une candidature + document.
	 * 
	 * @param $code_identification : le code d'identification
	 * @return $query la requete contenant la candidature + le document. 
	 * 
	 */
	public function get_candidature($code_inscription)
	{
		
		$req="CALL info_candidat_v1(?);";
		$data= array('code_inscription' => $code_inscription);
		$query = $this->db->query($req, $data);
		/*$query = $this->db->query("SELECT t_candidature_can.*, con_titre, cat_titre , GROUP_CONCAT(doc_lien_url SEPARATOR ';') as document FROM t_candidature_can 
        //JOIN t_document_doc USING(can_email)
        //JOIN t_concours_con USING(con_id)
        //JOIN t_categorie_cat USING(cat_id)
        WHERE t_candidature_can.can_code_inscription = '" . $code_inscription. "';");*/

		return $query->result_array();
				 
	}
	public function get_candidature2()
	{
		$this->load->helper('url');
		$code_inscription=$this->input->post('code_inscription');
		//$code_identification=$this->input->post('code_identification');
		$req="CALL info_candidat_v1('".$code_inscription."');";
		$query = $this->db->query($req);
		return $query->result_array();
	}	

	////////////////////////////////Back_OFFICE//////////////////////////////
	/**
	 * Fonction de requête d'affichage de tous les concours en back_office.
	 * 
	 * @return $query la requete contenant tous les concours + phase 
	 * 
	 */
	public function get_concours()
	{
		$req="SELECT * FROM `LISTE_CONCOURS_PHASES`;";
		$query = $this->db->query($req);
		return $query->result_array();
	}

	/**
	 * Fonction de récupération de tous les compte issus de la base de données.
	 * @return $query la requete contenant la liste des comptes. 
	 * 
	 */
	public function get_all_compte()
	{
		$query = $this->db->query("SELECT cpt_pseudo FROM t_compte_cpt;");
		return $query->result_array();
	}

	/**
	 * Fonction de consultation d'un compte en particulier.
	 * @return $query la requete contenant les infos du compte en question. 
	 * 
	 */
	public function get_compte($id)
	{
		$q = $this->db->query("CALL info_connexion(?);");
		$data = array('$id' => $id);
		$query = $this->db->query($q, $data);
		return $query->row();
	}
	/**
	 * Fonction d'énumération des comptes .
	 * @return $query la requete contenant les infos du compte en question. 
	 * 
	 */
	public function get_nb_comptes()
	{
	// Fonction créée et testée dans le précédent tutoriel
		$query=$this->db->query("SELECT COUNT(*) as nb FROM t_compte_cpt;");
		return $query->row();
	}
	/**
	 * Fonction d'ajout d'un compte en base de données .
	 * @return $query la requete contenant les infos du compte en question. 
	 * 
	 */
	public function set_compte()
	{
	// Fonction qui insère une ligne dans la table des comptes
		$this->load->helper('url');
		$id=$this->input->post('id');
		$mdp=$this->input->post('mdp');
		$req="INSERT INTO t_compte_cpt VALUES ('".$id."','".$mdp."');";
		$query = $this->db->query($req);
		return ($query);
	}
}