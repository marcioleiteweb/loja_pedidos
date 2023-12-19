<?php
	$id = $_GET['id'];
	//Buscar os dados sobre pedido segundo o id
	$result_pedido = "SELECT * FROM pedido WHERE id = '$id' LIMIT 1";
	$resultado_pedido = mysqli_query($conn, $result_pedido);
	$row_pedido = mysqli_fetch_assoc($resultado_pedido);
	
	$id_cliente_pedido = $row_pedido['id_cliente'];
	
	//Buscar os dados sobre cliente segundo o id do cliente vindo do pedido
	$result_cliente = "SELECT * FROM cliente WHERE id = '$id_cliente_pedido' LIMIT 1";
	$resultado_cliente = mysqli_query($conn, $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);
	
	
			
?>

<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Pedido</h1>
	</div>

	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=79">
				<button type='button' class='btn btn-sm btn-success'>Listar</button>
			</a>

			<a href="administrativo.php?link=82&id=<?php echo $row_pedido["id"]; ?>">
				<button type="button" class="btn btn-sm btn-warning">
					Editar
				</button>
			</a>

			<a href="administrativo/processa/apaga/adm_apagar_pedidos.php?id=<?php echo $row_pedido["id"]; ?>">
				<button type="button" class="btn btn-sm btn-danger">
					Apagar
				</button>
			</a>

		</div>
	</div>

	<dl class="dl-horizontal">
		<dt>Dados do Cliente:</dt>
		<dd></dd>
		<dt>Nome Completo: </dt>
		<dd><?php echo $row_cliente['nome']; ?></dd>
		<dt>Email: </dt>
		<dd><?php echo $row_cliente['email']; ?></dd>
		<dt>Senha Cadastrada: </dt>
		<dd><?php echo $row_cliente['senha_real']; ?></dd>
		<dt>WhatsApp: </dt>
		<dd><?php echo $row_cliente['celular']; ?></dd>
		<dt>CPF ou CNPJ: </dt>
		<dd><?php echo $row_cliente['cpf']; ?></dd>
		<dt>Dados de Evio:</dt>
		<dd></dd>
		<dt>Rua: </dt>
		<dd><?php echo $row_cliente['rua']; ?></dd>
		<dt>Bairro: </dt>
		<dd><?php echo $row_cliente['bairro']; ?></dd>
		<dt>Cidade: </dt>
		<dd><?php echo $row_cliente['cidade']; ?></dd>
		<dt>Estado: </dt>
		<dd><?php echo $row_cliente['uf']; ?></dd>
		<dt>CEP: </dt>
		<dd><?php echo $row_cliente['cep']; ?></dd>	
	</dl>
		<dl class="dl-horizontal">
			<dt>Status do Pedido: </dt>
			<dd class="alert alert-danger" role="alert"><h3><?php echo $row_pedido['status_venda']; ?></h3></dd>	
		</dl>
</div>


<?php
	$result_lista_compra = "SELECT * FROM pedido_lista WHERE id_pedido = '$id'";
	$resultado_lista_compra = mysqli_query($conn , $result_lista_compra);
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Lista de Compras</h1>
	</div>
	<div class="row espaco">
		
	</div>
	<div class="row">
        <div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Produto</th>
						<th class="text-center">Valor</th>
						<th class="text-center">Foto</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row_lista_compra = mysqli_fetch_assoc($resultado_lista_compra)){?>
						<tr>
							<td class="text-center"><?php echo $row_lista_compra["id"]; ?></td>
							<td class="text-center"><?php echo $row_lista_compra["nome_produto"]; ?></td>
							<td class="text-center">R$ <?php echo number_format($row_lista_compra["preco_produto"],2,",",".");?></td>
							<td class="text-center"><img src="../imagem_produto/<?php echo $row_lista_compra["foto_produto"];?>" alt="" style="width: 50px;"></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
			<dl class="dl-horizontal">
				<dt>Valor Total: </dt>
				<dd class="alert alert-success" role="alert"><h3>R$ <?php echo number_format($row_pedido['valor_total'],2,",",".");?></h3></dd>	
			</dl>
        </div>
	</div>
</div>