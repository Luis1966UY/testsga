<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        $this->load->model('ci_produto_model');
		$this->load->library(array('session','email'));
    }

    function index(){
        $this->load->view('produtos');
    }
 
    function product_data(){
        $data=$this->ci_produto_model->product_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->ci_produto_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->ci_produto_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->ci_produto_model->delete_product();
        echo json_encode($data);
    }
}
