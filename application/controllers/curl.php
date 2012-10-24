<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->ajouter();
	}

	public function ajouter() 
	{
		$dataLayout['titre'] = 'Partage un lien';
		$dataLayout['vue'] = $this->load->view('ajouter', array(), TRUE);
		$this->load->view('layout', $dataLayout);
	}

	public function choisir() 
	{
		$this->load->helper('form');
		$ch = curl_init();

	    curl_setopt($ch,CURLOPT_HEADER,0);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	    curl_setopt($ch,CURLOPT_URL, $this->input->post('champ'));
	    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);

	    $html = curl_exec($ch);

	    curl_close($ch);
	    
	    $html = utf8_decode($html);
	    $dom = new DOMDocument();
	    @$dom->loadHTML($html);
	    
	    
	    $nodes = $dom->getElementsByTagName("title");
	    $dataLayout['titreSite'] = $nodes->item(0)->nodeValue;

	     $nodes = $dom->getElementsByTagName("img");
	    foreach($nodes as $node){
	        $dataLayout['lienImg'][] = $node->getAttribute("src");
	    }
	  
	  	$dataLayout['url'] = $this->input->post('champ');

	    $nodes = $dom->getElementsByTagName("meta");
	    foreach($nodes as $node){
	        if(strtolower($node->getAttribute("name"))=="description"){
	            $dataLayout['description'] =  $node->getAttribute("content");
	        } else {
	        	$dataLayout['description'] = 'Pas de description';	
	        }
	    }

	    $dataLayout['titre'] = "Faites votre choix";
	    $dataLayout['vue'] = $this->load->view('choisir',$dataLayout, TRUE);
	    $this->load->view('layout',$dataLayout);
	}

	public function ajouterDB() {

		$data = array(	'titre' => $this->input->post('titre'),
	                    'description' => $this->input->post('url'),
	                    'url' => $this->input->post('description'),
	                    'url_img' => $this->input->post('img'));

		$this->db->insert('liens', $data);

		redirect('curl/afficher');
	}

	public function afficher() {

		$this->load->model('M_Afficher');

		$dataFiche['data'] = array(	'titre' 		=> $this->input->post('title'),
				                    'description' 	=> $this->input->post('lien'),
				                    'url' 			=> $this->input->post('description'),
				                    'url_img' 		=> $this->input->post('img'));

		$dataFiche['liens'] = $this->M_Afficher->afficher();

 		$dataLayout['titre'] = "Le contenu du site";
        $dataLayout['vue'] = $this->load->view('afficher',$dataFiche, TRUE);
        $this->load->view('layout',$dataLayout); 		
	}

	public function supprimer()
	{
		$this->load->model('M_Afficher');
		
		$this->M_Afficher->supprimer($this->uri->segment(3));
		$this->afficher();
	}

	public function modifier() 
	{
		$this->load->model('M_Afficher');
		
	}
}

/* End of file curl.php */
/* Location: ./application/controllers/curl.php */