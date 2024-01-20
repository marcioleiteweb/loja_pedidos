<?php
	//include_once("../../../conexao/conexao.php");
	
	
	if(isset($_POST['id_cliente'])){
		$_SESSION['id_cliente_post'] = mysqli_real_escape_string($conn, $_POST['id_cliente']);
		$_SESSION['valor_total_post'] = mysqli_real_escape_string($conn, $_POST['valor_total']);
		$_SESSION['id_carrinho'] = mysqli_real_escape_string($conn, $_POST['id_carrinho']);
	
		$id_cliente = $_SESSION['id_cliente_post']; 
		$valor_total = $_SESSION['valor_total_post'];
		$id_carrinho = $_SESSION['id_carrinho'];
	}else{
		$id_cliente = $_SESSION['id_cliente_post']; 
		$valor_total = $_SESSION['valor_total_post'];
		$id_carrinho = $_SESSION['id_carrinho'];
	}

	
	$result_cliente_antes = "SELECT * FROM cliente WHERE id = '$id_cliente' LIMIT 1";
	$resultado_cliente_antes = mysqli_query($conn , $result_cliente_antes);
	$row_cliente_antes = mysqli_fetch_assoc($resultado_cliente_antes);
	
	$result_produto_carrinho_antes = "SELECT * FROM carrinho WHERE id_cliente = '$id_cliente'";
	$resultado_produto_carrinho_antes = mysqli_query($conn , $result_produto_carrinho_antes);
	
	?>
	
	
	<?php if($id_carrinho !=0){?>
			  <!-- Modal -->
			<div class="modal fade" id="myModalMostra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Deseja Gerar Pedido?</h1>
				  </div>
				  <div class="modal-body">
						<dl class="dl-horizontal">		
							<dt>Nome do Cliente: </dt>
							<dd class="alert alert-success" role="alert">
							<?php echo $row_cliente_antes['nome'];?>
							<?php echo "$id_cliente";?>
							<?php echo "$id_carrinho";?>
							
							</dd>
						
							<dt>WhatsApp: </dt>
							<dd class="alert alert-success" role="alert">
							<?php echo $row_cliente_antes['celular'];?>
							</dd>
							
							<dt>Email: </dt>
							<dd class="alert alert-success" role="alert">
							<?php echo $row_cliente_antes['email'];?>
							</dd>
							
							<dt>Destino: </dt>
							<dd>
							Será enviado para o endereço abaixo cadastrado:
							</dd>
							
							<dt>CPF/CNPJ: </dt>
							<dd><?php echo $row_cliente_antes['cpf'];?></dd>
							<dt>Rua: </dt>
							<dd><?php echo $row_cliente_antes['rua'];?></dd>
							<dt>Bairro: </dt>
							<dd><?php echo $row_cliente_antes['bairro'];?></dd>
							<dt>Cidade: </dt>
							<dd><?php echo $row_cliente_antes['cidade'];?></dd>
							<dt>Estado: </dt>
							<dd><?php echo $row_cliente_antes['uf'];?></dd>
							<dt>CEP: </dt>
							<dd><?php echo $row_cliente_antes['cep'];?></dd>

						</dl>		
					
					  <table class="table table-light table-borderless table-hover text-center mb-0">
							<thead class="thead-dark">
								<tr>
									<th>Nome</th>
									<th>Preço</th>
								</tr>
							</thead>
							<tbody class="align-middle">
							<?php while($row_produto_carrinho_antes = mysqli_fetch_assoc($resultado_produto_carrinho_antes)){?>
								<tr>
									<td class="align-middle"><img src="../../../../imagem_produto/<?php echo $row_produto_carrinho_antes['foto_produto'];?>" alt="" style="width: 50px;"> <?php echo $row_produto_carrinho_antes['nome_produto'];?></td>
									<td class="align-middle">R$ <?php echo number_format($row_produto_carrinho_antes['preco_produto'],2,",",".");?></td>
								</tr>
							<?php }?>
							</tbody>
						</table>
						
						<dl class="dl-horizontal">
							<dt>Valor Total:</dt>
							<dd class="alert alert-danger" role="alert">
							<h3>R$ <?php echo number_format($valor_total,2,",",".");?></h3>
							</dd>	
						</dl>
				  </div>
				  <div class="modal-footer">
					<a href="add_pedido.php?ativa=1" class="btn btn-sm btn-success" data-bs-dismiss="modal">Sim</a>
					<a href="carrinho" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Não</a>
				  </div>
				</div>
			  </div>
			</div>
			
	<?php }else{?>
	
		<!-- Modal -->
			<div class="modal fade" id="myModalZero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Não há pedido!</h1>
					
				  </div>
				  <div class="modal-body">
					Faça seu cadastro e login e adicione os produtos no carrinho!
				  </div>
				  <div class="modal-footer">
					<a href="home" class="btn btn-sm btn-primary" data-bs-dismiss="modal">OK</a>
				  </div>
				</div>
			  </div>
			</div>
	
	<?php }?>
	
	
	<?php
	if(isset($_GET['ativa'])){
		$ativa = $_GET['ativa'];
	}else{
		$ativa =0;
	}	
	
	if($ativa == 1){
		
	$status_venda = "iniciada";	
	
	
	if(isset($id_cliente)){
	$result_pedido = "INSERT INTO pedido (id_cliente, status_venda, valor_total) VALUES ('$id_cliente', '$status_venda', '$valor_total')";
	$resultado_pedido = mysqli_query($conn, $result_pedido);
	}
	
	
	$result_pedido_isere = "SELECT * FROM pedido ORDER BY id DESC LIMIT 1";
	$resultado_pedido_isere = mysqli_query($conn , $result_pedido_isere);
	$row_pedido_isere = mysqli_fetch_assoc($resultado_pedido_isere);
	
	$id_pedido_antes = $row_pedido_isere['id'];
	
	
	$result_produto_carrinho = "SELECT * FROM carrinho WHERE id_cliente = '$id_cliente'";
	$resultado_produto_carrinho = mysqli_query($conn , $result_produto_carrinho);
	
	
	if(isset($row_pedido_isere)){
		while($row_produto_carrinho = mysqli_fetch_assoc($resultado_produto_carrinho)){
			
			$nome_produto = $row_produto_carrinho['nome_produto'];
			$preco_produto = $row_produto_carrinho['preco_produto'];
			$foto_produto = $row_produto_carrinho['foto_produto'];
			$id_produto = $row_produto_carrinho['id_produto'];
			$id_cliente_post = $row_produto_carrinho['id_cliente'];
			
		$result_pedido_lista = "INSERT INTO pedido_lista (id_produto, nome_produto, preco_produto, foto_produto, id_cliente, id_pedido) VALUES ('$id_produto', '$nome_produto', '$preco_produto', '$foto_produto', '$id_cliente_post', '$id_pedido_antes')";
		$resultado_pedido_lista = mysqli_query($conn, $result_pedido_lista);
		}
	}
	

	if(mysqli_affected_rows($conn) != 0){
	$result_carrinho_remove = "DELETE FROM carrinho WHERE id_cliente = '$id_cliente'";
	$resultado_carrinho_remove = mysqli_query($conn, $result_carrinho_remove);
	
	
	$result_cliente = "SELECT * FROM cliente WHERE id = '$id_cliente' LIMIT 1";
	$resultado_cliente = mysqli_query($conn , $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);
		
	$result_resumo_pedido = "SELECT * FROM pedido_lista WHERE id_pedido = '$id_pedido_antes'";
	$resultado_resumo_pedido = mysqli_query($conn , $result_resumo_pedido);
	
?>
		  <!-- Modal -->
			<div class="modal fade" id="myModalGera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Pedido Gerado com Sucesso!</h1>
				  </div>
				  <div class="modal-body">
					Pedido Numero:<?php echo "$id_pedido_antes";?>

						<dl class="dl-horizontal">		

							<dt>Nome do Cliente: </dt>
							<dd class="alert alert-success" role="alert">
							<?php echo $row_cliente['nome'];?>
							
							</dd>
						
							<dt>WhatsApp: </dt>
							<dd class="alert alert-success" role="alert">
							<?php echo $row_cliente['celular'];?>
							</dd>
							
							<dt>Email: </dt>
							<dd class="alert alert-success" role="alert">
							<?php echo $row_cliente['email'];?>
							</dd>
							
							<dt>Destino: </dt>
							<dd>
							Será enviado para o endereço abaixo cadastrado:
							</dd>
							
							<dt>CPF/CNPJ: </dt>
							<dd><?php echo $row_cliente['cpf'];?></dd>
							<dt>Rua: </dt>
							<dd><?php echo $row_cliente['rua'];?></dd>
							<dt>Bairro: </dt>
							<dd><?php echo $row_cliente['bairro'];?></dd>
							<dt>Cidade: </dt>
							<dd><?php echo $row_cliente['cidade'];?></dd>
							<dt>Estado: </dt>
							<dd><?php echo $row_cliente['uf'];?></dd>
							<dt>CEP: </dt>
							<dd><?php echo $row_cliente['cep'];?></dd>

						</dl>		
					
					  <table class="table table-light table-borderless table-hover text-center mb-0">
							<thead class="thead-dark">
								<tr>
									<th>Nome</th>
									<th>Preço</th>
								</tr>
							</thead>
							<tbody class="align-middle">
							<?php while($row_produto_carrinho = mysqli_fetch_assoc($resultado_resumo_pedido)){?>
								<tr>
									<td class="align-middle"><img src="../../../../imagem_produto/<?php echo $row_produto_carrinho['foto_produto'];?>" alt="" style="width: 50px;"> <?php echo $row_produto_carrinho['nome_produto'];?></td>
									<td class="align-middle">R$ <?php echo number_format($row_produto_carrinho['preco_produto'],2,",",".");?></td>
								</tr>
							<?php }?>
							</tbody>
						</table>
						<dl class="dl-horizontal">
							<dt>Valor Total:</dt>
							<dd class="alert alert-success" role="alert">
							<h3>R$ <?php echo number_format($valor_total,2,",",".");?></h3>
							</dd>	
						</dl>
				  </div>
				  <div class="modal-footer">
					<a href="../../../../home" class="btn btn-sm btn-primary" data-bs-dismiss="modal">OK</a>
				  </div>
				</div>
			  </div>
			</div>
	<?php }else{?>
			<!-- Modal -->
			<div class="modal fade" id="myModalGera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Não foi possível!</h1>
					
				  </div>
				  <div class="modal-body">
					Não foi possivel Gerar pedido!
				  </div>
				  <div class="modal-footer">
					<a href="../../../../home" class="btn btn-sm btn-primary" data-bs-dismiss="modal">OK</a>
				  </div>
				</div>
			  </div>
			</div>
	
	<?php }?>
	
<?php }?>
	
	
<?php $conn->close(); ?>
		
		<?php if($id_carrinho == 0){?>
		<script>
			$(document).ready(function(){
				$('#myModalZero').modal('show');
			});
		</script>
		<?php }?>
		<?php if($ativa == 1){?>
		<script>
			$(document).ready(function(){
				$('#myModalGera').modal('show');
			});
		</script>
		<?php }else{?>
		<script>
			$(document).ready(function(){
				$('#myModalMostra').modal('show');
			});
		</script>
		<?php }?>
