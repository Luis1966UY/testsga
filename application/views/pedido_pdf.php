<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
</head>
<body>

 	<h2>Pedido de produtos código <?php echo $dados_pedido[0]->codigo_pedido; ?></h2>
 	<table border="1" cellpadding="5" cellspacing="3">
 		<tr>
 			<td>Nome: <?php echo $dados_pedido[0]->nome_cliente; ?></td>
 			<td>Data: <?php echo date('d/m/Y', strtotime($dados_pedido[0]->data_pedido)); ?></td>
 			<td>Forma de pagamento: <?php echo $dados_pedido[0]->forma_pagamento_pedido; ?></td>
 		</tr>
 		<tr>
 			<td colspan="3">Observações: <br><?php echo $dados_pedido[0]->observacoes_pedido; ?></td>

 		</tr>
 	</table>
 	<h3>Detalhe</h3>
 	<table border="1" cellpadding="5" cellspacing="3" width="100%">
 		<tr>
	 		<th>Produto</th>
	 		<th>Valor</th>
	 		<th>Quantidade</th>
	 		<th>Preço</th>
 		</tr>

<?php 
		$total = 0;
		foreach ($dados_detalhe_pedido as $linha_detalhe) { 

?>
 		
		<tr>
			<td><?php echo $linha_detalhe->nome_produto; ?></td>
			<td align="center"><?php echo $linha_detalhe->preco; ?></td>
			<td align="center"><?php echo $linha_detalhe->quantidade; ?></td>
			<td align="right"><?php echo "R$".number_format(($linha_detalhe->preco * $linha_detalhe->quantidade), 2, ',', '.'); ?></td>
		</tr>

<?php 
			$total += $linha_detalhe->preco * $linha_detalhe->quantidade;
		} 
?>
 	</table>

 	<p>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></p>

 
</body>
</html>