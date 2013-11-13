<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Products_model','datamodel');     
    }
	   
	
	public function index()
	{

		 $data['title']='List Of Products';	
		
		 //membuat nomor
		
		//tamplikan data
		 $data['array_produk'] = $this->datamodel->ambil_produk();
		
		 $this->mytemplate->loadBackend('products',$data);
	}
	
	public function cari()
	{

		 $data['title']='List Of Products';	
		$c = $this->input->POST ('cari');
		 //membuat nomor
		
		//tamplikan data
		 $data['array_produk'] = $this->datamodel->ambil_produk($c);
		  $data['c']=$c;
		
		 $this->mytemplate->loadBackend('products',$data);
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
