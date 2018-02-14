<!-- Permet de voir ce qui s'affiche après avoir cliqué sur "Créer un compte" -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('Model_inscription');
	}
	public function index(){
		if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["allergies"])){
			echo $_POST['nom'];
			echo $_POST['prenom'];
			echo $_POST['email'];
			echo $_POST['allergies'];
			redirect('inscrit', 'refresh');
		}
	}

	public function inscription(){
		$this->form_validation->set_rules('nom', 'Nom', 'required|trim');
		$this->form_validation->set_rules('prenom', 'Prénom', 'required|trim');
		$this->form_validation->set_rules('email', 'Adresse mail', '');
		$this->form_validation->set_rules('mdp', 'Mot de passe', 'required|trim');
		$this->form_validation->set_rules('allergies', 'Allergies', 'required|trim');


		if($this->form_validation->run() === FALSE){
			$this->load->view('compte');
		}else{
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$email = $this->input->post('email');
			$password = $this->input->post('mdp');
			$allergies = $this->input->post('allergies');

			$data=array(
				'nom'=>$nom,
				'prenom'=>$prenom,
				'email'=>$email,
				'password'=>$password,
				'allergies'=>$allergies
				);

			$this->Model_inscription->create_utilisateur($data);

			if($this->Model_inscription->create_utilisateur($data)){
				$this->load->view('inscrit',$data);
			}else{
				//Charger page pour non inscription		
			}
		// print_r($data);
		}
	}


	public function connexion(){

		$this->form_validation->set_rules('email', 'Adresse mail ', 'trim');
		$this->form_validation->set_rules('mdp', 'Mot de passe ', 'required|trim');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('compte');
		}else{

			$email = $this->input->post('mail');

			$password = $this->input->post('mdp');


			$data=array('email'=>$email,'password'=>$password);

			$userActual=array();

			$presentDansLaBase=$this->Model_inscription->verifierUtilisateur($data);

			if($presentDansLaBase){
				$query=$this->Model_inscription->recupererInfosUtilisateur($data);

				if($query){
					foreach($query->result() as $tuples){
						$userActuel['nom']=$tuples->nom;
						$userActuel['prenom']=$tuples->prenom;
						$userActuel['email']=$tuples->email;
						$userActuel['password']=$tuples->password;
						$userActuel['allergies']=$tuples->allergies;
					}

					
					/* Gère si l'utilisateur s'est authentifié correctement ou pas */
					if(isset($userActuel['password']) && isset($userActuel['email'])){
						if($password==$userActuel['password'] && $email == $userActuel['email']){
							$this->load->view('inscrit',$data);
						}else{
							$this->load->view('echec_connexion',$data);
						}
					}
				}
			}else{
				echo "pas dans la base";
			}
		}
	}
}

?>
