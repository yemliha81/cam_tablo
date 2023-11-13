<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = 'tr';
        }
        if(empty($_SESSION['lang_array'])){
            $_SESSION['lang_array'] = array('tr', 'en');
        }
    }
    
	public function detail($id)
	{
		
		$data['product'] = $this->db->select('*, category_table.id as cat_id, products_table.id as id')
		    ->join('category_table', 'products_table.cat_id = category_table.id', 'left')
    		->where('products_table.id', $id)
    		->get('products_table')->row_array();
    	
    	$data['last_products'] = $this->db->select('*, category_table.id as cat_id, products_table.id as id')
    		->join('category_table', 'products_table.cat_id = category_table.id', 'left')
    		->limit('8')
    		->order_by('products_table.id', 'desc')
    		->get('products_table')->result_array();
    	    
    	$this->load->view('product_view', $data);

	}
	
	public function search(){
	    $post = $this->input->post();
	    
	    $text = $post['txt'];
	    
	    
	    $data['results'] = $this->db->select('*')
	        ->like('product_name_'.$_SESSION['lang'], $text, 'both')
	        ->get('products_table')->result_array();
	        
	        
	   $this->load->view('search_view', $data);
	    
	}
	
	
}
