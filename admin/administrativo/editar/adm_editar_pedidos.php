<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM pedido WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);	
?>
<div class="container theme-showcase" role="main">

	<div class="page-header">
        <h1>Editar Status do pedido</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	
			<a href="administrativo.php?link=79" class="btn btn-sm btn-success">
				Voltar
			</a>
		</div>
	</div>
	<form class="form-horizontal" id="adm_cad_central" method="POST" action="administrativo/processa/edita/adm_proc_edita_pedidos.php" enctype="multipart/form-data">

		<div class="form-group">
			<label class="col-sm-2 control-label">Artigo de qual Estado</label>
			<div class="col-sm-10">
				<select class="form-control" name="status_venda">
					<option>Selecione</option>
						<option value="Iniciada">Iniciada</option>
						<option value="Processando">Processando</option>
						<option value="Cancelado">Cancelado</option>
						<option value="Enviado">Enviado</option>
				</select>
			</div>
		</div>	


		
		<input type="hidden" name="id" value="<?php echo $row_produtos['id']; ?>">
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" onclick="tinyMCE.triggerSave();" class="btn btn-warning">Alterar</button>
			</div>
		</div>
	</form>
</div>