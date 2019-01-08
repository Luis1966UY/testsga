<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_cliente_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function client_list(){
        $data=$this->db->get('clientes');
        return $data->result();
    }

 	function client_list_ordered(){
 		$this->db->order_by('nome_cliente', 'ASC');
        $data=$this->db->get('clientes');
        return $data->result();
    }
 
    function save_client(){
        $data = array(
                'codigo_cliente'  	=> $this->input->post('codigo_cliente'), 
                'nome_cliente'  	=> $this->input->post('nome_cliente'), 
                'cpf_cliente' 		=> $this->input->post('cpf_cliente'), 
                'sexo_cliente' 		=> $this->input->post('sexo_cliente'), 
                'email_cliente' 	=> $this->input->post('email_cliente'), 
            );
        $result=$this->db->insert('clientes',$data);
        return $result;
    }
 
    function update_client(){
        $codigo_cliente	= $this->input->post('codigo_cliente');
        $nome_cliente	= $this->input->post('nome_cliente');
        $cpf_cliente	= $this->input->post('cpf_cliente');
        $sexo_cliente	= $this->input->post('sexo_cliente');
        $email_cliente	= $this->input->post('email_cliente');
        $cliente_id		= $this->input->post('cliente_id');
 
        $this->db->set('codigo_cliente', $codigo_cliente);
        $this->db->set('nome_cliente', $nome_cliente);
        $this->db->set('cpf_cliente', $cpf_cliente);
        $this->db->set('sexo_cliente', $sexo_cliente);
        $this->db->set('email_cliente', $email_cliente);
        $this->db->where('cliente_id', $cliente_id);
        $result=$this->db->update('clientes');
        return $result;
    }
 
    function delete_client(){
        $cliente_id=$this->input->post('cliente_id');
        $this->db->where('cliente_id', $cliente_id);
        $result=$this->db->delete('clientes');
        return $result;
    }

}
