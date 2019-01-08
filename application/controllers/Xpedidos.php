<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xpedidos extends CI_Controller {

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
        $this->load->model('ci_pedido_model');
        $this->load->model('ci_cliente_model');
        $this->load->model('ci_produto_model');
        $this->load->model('ci_pedido_produtos_model');

		$this->load->library(array('session','email'));
    }

    function index(){
        $this->load->view('pedidos');
    }
 
    function pedido_data(){
        $data=$this->ci_pedido_model->pedido_list();
        echo json_encode($data);
    } 

    function pedido_data_rel(){
        $data=$this->ci_pedido_model->pedido_list_por_datas();
        echo json_encode($data);
    }
    
     function pedido_cliente_rel(){
        $data=$this->ci_pedido_model->pedido_list_por_cliente();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->ci_pedido_model->save_pedido();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->ci_pedido_model->update_pedido();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->ci_pedido_model->delete_pedido();
        echo json_encode($data);
    }

    function delete_detalhe(){
        $data=$this->ci_pedido_produtos_model->delete_pedido_produtos_pedidoid();
        echo json_encode($data);
    }

    function client_data(){
        $data=$this->ci_cliente_model->client_list_ordered();
        echo json_encode($data);
    }

    function product_data(){
        $data=$this->ci_produto_model->product_list_ordered();
        echo json_encode($data);
    }

    function last_pedido_id(){
        $data=$this->ci_pedido_model->get_last_pedido();
        echo json_encode($data);
    }

    function save_detalhe(){
        $data=$this->ci_pedido_produtos_model->save_pedido_produtos();
        echo json_encode($data);
    }

    function detalhe_data(){
        $data=$this->ci_pedido_produtos_model->pedido_produtos_list();
        echo json_encode($data);
    }

    function email(){
        $dados_pedido=$this->ci_pedido_model->pedido_porid();
        $dados_detalhe_pedido = $this->ci_pedido_produtos_model->detalhe_porid();


        $para = $dados_pedido[0]->email_cliente;
        $assunto = "Pedido Cod.".$dados_pedido[0]->codigo_pedido;
        $headers = "From:pedidos@sistemapedidos.com.br". "\r\n";

        $texto = "Pedido Cod.: ".$dados_pedido[0]->codigo_pedido. "\n";
        $texto .= "Data: ".date('d/m/Y', strtotime($dados_pedido[0]->data_pedido))."\n";
        $texto .= "A forma de pagamento será: ".$dados_pedido[0]->forma_pagamento_pedido."\n";
        $texto .= "Detalhe"."\n";

        $total = 0;
        foreach ($dados_detalhe_pedido as $key => $linha_pedido) {
            $texto .= "Produto: ".$linha_pedido->nome_produto." Valor Un.: ".$linha_pedido->preco." Quantidade: ".$linha_pedido->quantidade." Total: R$".number_format(($linha_pedido->preco * $linha_pedido->quantidade), 2, ',', '.')."\n";
            $total += ($linha_pedido->preco * $linha_pedido->quantidade);
        }
        $texto .= "Total do pedido: ".number_format($total, 2, ',', '.')."\n";

        $texto .= "Ficamos a sua disposição para qualquer esclarecimento. Muito obrigado."."\n";

        if(mail($para,$assunto,$texto,$headers)){
            return true;
        }
        else{
            return false;
        }
    }

    function pdf($pedido_id){
        $dados_pedido=$this->ci_pedido_model->pedido_poridpdf($pedido_id);
        $dados_detalhe_pedido = $this->ci_pedido_produtos_model->detalhe_poridpdf($pedido_id);

        $dados = array (
            'dados_pedido' => $dados_pedido,
            'dados_detalhe_pedido' => $dados_detalhe_pedido,
        );
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('pedido_pdf',$dados,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        return true;
    }

    function totaliza_pedido(){
        $data=$this->ci_pedido_produtos_model->pedido_produtos_list();
        //var_dump($data);
        $total = 0;
        foreach ($data as $linha_detalhe) {
            $total += $linha_detalhe->quantidade * $linha_detalhe->preco;
        }
        echo json_encode($total);
    }
}
