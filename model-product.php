<?php
class Products_model extends CI_Model {
    

    function __construct()
    {        
        parent::__construct();
    }
    
	
	public function ambil_produk($a='')
	{
		
		$this->db->order_by('ProductName', 'ASC');
		$this->db->like('ProductName', $a);
		$data = $this->db->get('products');
		return $data->result();
		
		
		

	}

}
