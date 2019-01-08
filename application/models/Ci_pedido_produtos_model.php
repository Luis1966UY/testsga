<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_pedido_produtos_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function pedido_produtos_list(){
        $pedido_id = $this->input->post('pedido_id');
        $this->db->where('pedido_id', $pedido_id);
        $data=$this->db->get('pedido_produtos');
        return $data->result();
    }
 
    function save_pedido_produtos(){
        $data = array(
                'pedido_id'  => $this->input->post('pedido_id'), 
                'produto_id'  => $this->input->post('produto_id'), 
                'quantidade' => $this->input->post('quantidade'), 
                'preco' => $this->input->post('preco'),  
            );
        $result=$this->db->insert('pedido_produtos',$data);
        return $result;
    }
 
    function update_pedido_produtos(){
        $pedido_id=$this->input->post('pedido_id');
        $produto_id=$this->input->post('produto_id');
        $quantidade=$this->input->post('quantidade');
        $preco=$this->input->post('preco');
 
        $this->db->set('pedido_id', $pedido_id);
        $this->db->set('produto_id', $produto_id);
        $this->db->set('quantidade', $quantidade);
        $this->db->set('preco', $preco);
        $this->db->where('pedido_produtos_id', $pedido_produtos_id);
        $result=$this->db->update('pedido_produtos');
        return $result;
    }
 
    function delete_pedido_produtos(){
        $pedido_id=$this->input->post('pedido_produtos_id');
        $this->db->where('pedido_produtos_id', $pedido_produtos_id);
        $result=$this->db->delete('pedido_produtos');
        return $result;
    }

 
    function delete_pedido_produtos_pedidoid(){
        $pedido_id=$this->input->post('pedido_id');
        $this->db->where('pedido_id', $pedido_id);
        $result=$this->db->delete('pedido_produtos');
        return $result;
    }

    function detalhe_porid(){
        $pedido_id=$this->input->post('pedido_id');
        $this->db->join('produtos', 'pedido_produtos.produto_id = produtos.produto_id');
        $this->db->where('pedido_id', $pedido_id);
        $data = $this->db->get('pedido_produtos');
        return $data->result();
    }

    function detalhe_poridpdf($param_pedido_id){
        $pedido_id=$param_pedido_id;
        $this->db->join('produtos', 'pedido_produtos.produto_id = produtos.produto_id');
        $this->db->where('pedido_id', $pedido_id);
        $data = $this->db->get('pedido_produtos');
        return $data->result();
    }

	
}
