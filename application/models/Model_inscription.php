<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_inscription extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function create_utilisateur($data){
		return $this->db->insert('Users', $data);
	}

	public function recupererInfosUtilisateur($data){
		$this->db->select('*');
		$this->db->from('Users');
		$this->db->where('email', $data['email']);
		$query=$this->db->get();

		return $query;
	}



	public function verifierUtilisateur($data){
		$this->db->select('email,COUNT(email) as mailPresent');
		$this->db->from('Users');
		$this->db->where('email', $data['email']);
		$query=$this->db->get();

		if($query->num_rows()>=1){
			$valeurRetour=true;
		}
		else{
			$valeurRetour=false;
		}
		return $valeurRetour;
	}

}

?>