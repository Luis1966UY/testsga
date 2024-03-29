<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_sga_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getGroups()
	{
		$this->db->select('*');
		$this->db->from('groups');
		return $this->db->get()->result_array();
	}

	public function getAll($tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		return $this->db->get()->result_array();
	}

	public function getAllWhere($condicao, $campo, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		return $this->db->get()->result_array();
	}


	public function getAllOrder($ordem, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->order_by($ordem, 'ASC');
		return $this->db->get()->result_array();
	}


	public function getAll2Where($condicao, $campo,$condicao2, $campo2, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		$this->db->where($campo2, $condicao2);
		return $this->db->get()->result_array();
	}


	public function getAll3Where($condicao, $campo,$condicao2, $campo2, $condicao3, $campo3, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		$this->db->where($campo2, $condicao2);
		$this->db->where($campo3, $condicao3);
		return $this->db->get()->result_array();
	}

	public function getAllWhereLeftJoin($condicao, $campo, $tabela, $tabela2, $cond_join)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		$this->db->join($tabela2, $cond_join, 'left');
		return $this->db->get()->result_array();
	}

	public function getAll2WhereLeftJoin($condicao, $campo, $condicao2, $campo2, $tabela, $tabela2, $cond_join)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		$this->db->where($campo2, $condicao2);
		$this->db->join($tabela2, $cond_join, 'left');
		return $this->db->get()->result_array();
	}

	public function getAllLeftJoin($tabela, $tabela2, $cond_join)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->join($tabela2, $cond_join, 'left');
		return $this->db->get()->result_array();
	}

	public function getAllWhereOrder($condicao, $campo, $ordem, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		$this->db->order_by($ordem, 'ASC');
		return $this->db->get()->result_array();
	}

	public function getAllDistinctJoinWhereOrder($condicao, $campo, $campo2, $ordem, $tabela, $tabela2, $cond_join)
	{
		$this->db->select($campo2);
		$this->db->distinct();
		$this->db->from($tabela);
		$this->db->join($tabela2, $cond_join, 'left');
		$this->db->where($campo, $condicao);
		$this->db->order_by($ordem, 'ASC');
		return $this->db->get()->result_array();
	}
	
	public function setTemplate($dados)
	{
		$this->db->insert( $this->tb, $dados);
		return $this->db->insert_id();
	}

	public function setAll($dados, $tabela)
	{
		$this->db->insert($tabela, $dados);
		return $this->db->insert_id();
	}

	public function setAllIfNotExists($campo1, $dados1, $campo2, $dados2, $tabela, $data)
	{
		$this->db->where($campo1,$dados1);
		$this->db->where($campo2,$dados2);
	   	$q = $this->db->get($tabela);

	   	if ( $q->num_rows() == 0 ){
	      	$this->db->insert($tabela,$data);
	      	return $this->db->insert_id();
	   	} 
		return;
	}
	
	public function getUserList()
	{
		$this->db->select('*');
		$this->db->from($this->tb);
		return $this->db->get()->result_array();
	}

	public function updateAll($id, $campo, $dados, $tabela)
	{
		$this->db->where($campo, $id);
		$this->db->update($tabela, $dados);
		// return $this->db->affected_rows();
		return $error = $this->db->error();
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->tb);
		return;
	}

	public function deleteDataTable($id, $tabela)
	{
		$this->db->where('id', $id);
		$this->db->delete($tabela);
		return;
	}

	public function deleteAll($dado, $campo, $tabela)
	{
		$this->db->where($campo, $dado);
		$this->db->delete($tabela);
		return;
	}	

	public function deleteAll2($dado1, $campo1, $dado2, $campo2, $tabela)
	{
		$this->db->where($campo1, $dado1);
		$this->db->where($campo2, $dado2);
		$this->db->delete($tabela);
		return;
	}



	//---------------- FUNCOES EXEMPLO -----------------
	public function setProdutosRelac($data)
	{
		$this->db->insert_batch('TB_PRODUTOS_RELACIONADOS', $data);
	}

	public function getProdutoRelacionados($id_produto)
	{
		$this->db->select('*');
		$this->db->from($this->tb_relacionados);
		$this->db->join($this->tb, $this->tb_relacionados.'.id_produto_relacionado ='.$this->tb.".id_produto");
		$this->db->where($this->tb_relacionados.'.id_produto', $id_produto);
		return $this->db->get()->result_array();
	}

	public function getImagens($id)
	{
		$this->db->select('*');
		$this->db->from('TB_IMAGENS_PRODUTOS');
		$this->db->where('id_produto', $id);
		return $this->db->get()->result_array();
	}

	public function getProdutosPagination($pagina)
	{
		$pagina = ($pagina=='' or $pagina ==1 )?0:$pagina;
		$calc = ($pagina>1)?(9*($pagina-1)):($pagina);

		$this->db->select('*');
		$this->db->from($this->tb);
		$this->db->join($this->tb_cat_produtos, $this->tb_cat_produtos.'.id_produto = '.$this->tb.".id_produto", 'left');
		$this->db->where($this->tb.".status", 1);
		$this->db->limit(9, $calc);
		$this->db->order_by($this->tb.".id_produto", 'ASC');
		return $this->db->get()->result_array();
	}

	public function atualizaDestaques($id, $dados)
	{
		$this->db->where('id', $id);
		$this->db->update('TB_PRODUTOS_DESTAQUE', $dados);
		return;
	}

	public function excluirDestaques($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('TB_PRODUTOS_DESTAQUE');
		return;
	}

	
}
