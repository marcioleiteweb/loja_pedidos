<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM cliente WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);
	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Cliente</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=60">
				<button type='button' class='btn btn-sm btn-success'>Listar</button>
			</a>
			
			<a href="administrativo.php?link=63&id=<?php echo $row_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-warning">
					Editar
				</button>
			</a>
			
			<a href="administrativo/processa/apaga/adm_apagar_membro.php?id=<?php echo $row_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-danger">
					Apagar
				</button>
			</a>
		</div>
	</div>
	<dl class="dl-horizontal">		
		<dt>Nome: </dt>
		<dd><?php echo $row_produtos['nome']; ?></dd>
		<dt>Celular: </dt>
		<dd><?php echo $row_produtos['celular']; ?></dd>
		<dt>Email: </dt>
		<dd><?php echo $row_produtos['email']; ?></dd>
		<dt>Senha: </dt>
		<dd><?php echo $row_produtos['senha_real']; ?></dd>
		<dt>Data de Nascimento: </dt>
		<dd>
		<?php
			if(isset($row_produtos['data_nascimento'])){
				$data_nascimento = $row_produtos['data_nascimento'];
				echo date('d/m/Y', strtotime($data_nascimento)); 
			}
		?>
		</dd>
		<dt>CPF/CNPJ: </dt>
		<dd><?php echo $row_produtos['cpf']; ?></dd>
		<dt>Rua: </dt>
		<dd><?php echo $row_produtos['rua']; ?></dd>
		<dt>Bairro: </dt>
		<dd><?php echo $row_produtos['bairro']; ?></dd>
		<dt>Cidade: </dt>
		<dd><?php echo $row_produtos['cidade']; ?></dd>
		<dt>Estado: </dt>
		<dd><?php echo $row_produtos['uf']; ?></dd>
		<dt>CEP: </dt>
		<dd><?php echo $row_produtos['cep']; ?></dd>
		<dt>Descrição: </dt>
		<dd><?php echo $row_produtos['descricao']; ?></dd>
	</dl>
</div>