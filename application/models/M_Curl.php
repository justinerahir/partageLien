<?php 

	class M_Curl extends CI_Model
	{
		public function afficher()
		{
			$this->db->select('*');	
			$this->db->from('liens');

			$query = $this->db->get();
			return $query->result();
		}

		public function ajouterDB() 
		{
			$data = array(	'titre' 		=> $this->input->post('titre'),
		                    'description' 	=> $this->input->post('description'),
		                    'url' 			=> $this->input->post('url'),
		                    'url_img' 		=> $this->input->post('img'));

			$this->db->insert('liens', $data);
		}

		public function remplacerDB($id, $data)
		{
			$this->db->update('liens', $data, array('id_lien'=>$id));
			//$this->db->where('id_lien', $id);
			//$this->db->update('liens', $data);			
		}
			
		public function modifier($data) 
		{
			$this->db->select('*');
			$this->db->from('liens');
			$this->db->where('id_lien', $data);

			$query = $this->db->get();

			return $query->row();
		}

		public function supprimer($data)
		{
            $this->db->delete('liens', array('id_lien'=>$data));
            return true;
        }
}