<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_produto_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function product_list(){
        $data=$this->db->get('produtos');
        return $data->result();
    }


    function product_list_ordered(){
        $this->db->order_by('nome_produto', 'ASC');
        $data=$this->db->get('produtos');
        return $data->result();
    }
 
    function save_product(){
        $data = array(
                'codigo_produto'    => $this->input->post('codigo_produto'), 
                'nome_produto'      => $this->input->post('nome_produto'), 
                'cor_produto'       => $this->input->post('cor_produto'), 
                'tamanho_produto'   => $this->input->post('tamanho_produto'), 
                'valor_produto'     => $this->input->post('valor_produto'), 
            );
        $result=$this->db->insert('produtos',$data);
        return $result;
    }
 
    function update_product(){
        $codigo_produto     = $this->input->post('codigo_produto');
        $nome_produto       = $this->input->post('nome_produto');
        $cor_produto        = $this->input->post('cor_produto');
        $tamanho_produto    = $this->input->post('tamanho_produto');
        $valor_produto      = $this->input->post('valor_produto');
        $produto_id         = $this->input->post('produto_id');
 
        $this->db->set('codigo_produto', $codigo_produto);
        $this->db->set('nome_produto', $nome_produto);
        $this->db->set('cor_produto', $cor_produto);
        $this->db->set('tamanho_produto', $tamanho_produto);
        $this->db->set('valor_produto', $valor_produto);
        $this->db->where('produto_id', $produto_id);
        $result=$this->db->update('produtos');
        return $result;
    }
 
    function delete_product(){
        $produto_id=$this->input->post('produto_id');
        $this->db->where('produto_id', $produto_id);
        $result=$this->db->delete('produtos');
        return $result;
    }

	
}
