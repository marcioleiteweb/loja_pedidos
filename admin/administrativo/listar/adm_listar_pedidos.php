<?php
	$result_pedidos = "SELECT * FROM  pedido";
	$resultado_pedidos = mysqli_query($conn , $result_pedidos);
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Lista de Pedidos</h1>
	</div>
	<div class="row espaco">
		
	</div>
	<div class="row">
	
        <div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Nome Cliente</th>
						<th class="text-center">Valor Total</th>
						<th class="text-center">Status</th>
						<th class="text-center">Ação</th>
					</tr>
				</thead>
				<tbody>
						<?php while($row_cliente_associa = mysqli_fetch_assoc($resultado_pedidos)){?>	
							<tr>
								<td class="text-center"><?php echo $row_cliente_associa["id"]; ?></td>
								<td class="text-center">
									<?php $categorias_produto_associa = $row_cliente_associa["id_cliente"]; 
										$result_categorias_produto_associa = "SELECT * FROM  cliente WHERE id = '$categorias_produto_associa' LIMIT 1";
										$resultado_categorias_produto_associa = mysqli_query($conn, $result_categorias_produto_associa);
										$row_categorias_produto_associa = mysqli_fetch_assoc($resultado_categorias_produto_associa);
										echo $row_categorias_produto_associa['nome'];
									?>
								</td>
								<td class="text-center">R$ <?php echo number_format($row_cliente_associa["valor_total"],2,",",".");?></td>
								<td class="text-center"><?php echo $row_cliente_associa["status_venda"]; ?></td>
								
								<td class="text-center">
									<a href="administrativo.php?link=80&id=<?php echo $row_cliente_associa["id"]; ?>">
										<button type="button" class="btn btn-xs btn-primary">
											Visualizar
										</button>
									</a>
									<a href="administrativo.php?link=82&id=<?php echo $row_cliente_associa["id"]; ?>">
										<button type="button" class="btn btn-xs btn-warning">
											Editar
										</button>
									</a>
									<a href="administrativo/processa/apaga/adm_apagar_pedidos.php?id=<?php echo $row_cliente_associa["id"]; ?>">
										<button type="button" class="btn btn-xs btn-danger">
											Apagar
										</button>
									</a>
								</td>
							</tr>
						<?php } ?>
						

				</tbody>
			</table>
        </div>
	</div>
</div>