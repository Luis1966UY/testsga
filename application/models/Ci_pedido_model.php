<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_pedido_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function pedido_list(){
        $this->db->join('clientes', 'clientes.cliente_id = pedidos.cliente_id');
        $data=$this->db->get('pedidos');
        return $data->result();
    }
 
    function save_pedido(){
        $formatted_data = $this->input->post('data_pedido');
        $formatted_data = substr($formatted_data,6,4)."-".substr($formatted_data,3,2)."-".substr($formatted_data,0,2);
        $data = array(
                'codigo_pedido'             => $this->input->post('codigo_pedido'), 
                'data_pedido'               => $formatted_data, 
                'observacoes_pedido'        => $this->input->post('observacoes_pedido'), 
                'forma_pagamento_pedido'    => $this->input->post('forma_pagamento_pedido'), 
                'cliente_id'                => $this->input->post('cliente_id'), 
            );
        $result=$this->db->insert('pedidos',$data);
        return $result;
    }
 
    function update_pedido(){
        $formatted_data = $this->input->post('data_pedido');
        $formatted_data = substr($formatted_data,6,4)."-".substr($formatted_data,3,2)."-".substr($formatted_data,0,2);
        $codigo_pedido          = $this->input->post('codigo_pedido');
        $data_pedido            = $formatted_data;
        $observacoes_pedido     = $this->input->post('observacoes_pedido');
        $forma_pagamento_pedido = $this->input->post('forma_pagamento_pedido');
        $cliente_id             = $this->input->post('cliente_id');
        $pedido_id              = $this->input->post('pedido_id');
 
        $this->db->set('codigo_pedido', $codigo_pedido);
        $this->db->set('data_pedido', $data_pedido);
        $this->db->set('observacoes_pedido', $observacoes_pedido);
        $this->db->set('forma_pagamento_pedido', $forma_pagamento_pedido);
        $this->db->set('cliente_id', $cliente_id);
        $this->db->where('pedido_id', $pedido_id);
        $result = $this->db->update('pedidos');
        return $result;
    }
 
    function delete_pedido(){
        $pedido_id=$this->input->post('pedido_id');
        $this->db->where('pedido_id', $pedido_id);
        $result=$this->db->delete('pedidos');
        return $result;
    }

    function get_last_pedido(){
        $this->db->order_by('pedido_id','DESC');
        $data = $this->db->get('pedidos');

        
        return $data->result();
    }

    function pedido_porid(){
        $pedido_id=$this->input->post('pedido_id');
        $this->db->join('clientes', 'clientes.cliente_id = pedidos.cliente_id');
        $this->db->where('pedido_id', $pedido_id);
        $data = $this->db->get('pedidos');
        return $data->result();
    }

    function pedido_poridpdf($param_pedido_id){
        $pedido_id=$param_pedido_id;
        $this->db->join('clientes', 'clientes.cliente_id = pedidos.cliente_id');
        $this->db->where('pedido_id', $pedido_id);
        $data = $this->db->get('pedidos');
        return $data->result();
    }

    function pedido_list_por_datas(){
        $data_desde = $this->input->post('data_desde');
        $data_desde = substr($data_desde,6,4)."-".substr($data_desde,3,2)."-".substr($data_desde,0,2);
        $data_ate = $this->input->post('data_ate');
        $data_ate = substr($data_ate,6,4)."-".substr($data_ate,3,2)."-".substr($data_ate,0,2);
        $this->db->join('clientes', 'clientes.cliente_id = pedidos.cliente_id');
        $this->db->where('data_pedido >=', $data_desde);
        $this->db->where('data_pedido <=', $data_ate);
        $this->db->order_by('data_pedido', 'ASC');
        $data = $this->db->get('pedidos');
        return $data->result();
    }

    function pedido_list_por_cliente(){
        $cliente_id = $this->input->post('cliente_id');
        $this->db->where('cliente_id', $cliente_id);
        $this->db->order_by('data_pedido', 'ASC');
        $data = $this->db->get('pedidos');
        return $data->result();
    }
	
}
