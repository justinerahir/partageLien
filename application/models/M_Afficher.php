<?php 

	class M_Afficher extends CI_Model
	{
		public function afficher()
		{
			$this->db->select('*');	
			$this->db->from('liens');

			$query = $this->db->get();
			return $query->result();
		}

		public function supprimer($data)
		{
            $this->db->delete('liens', array('id_lien'=>$data));
            return true;
        }
}