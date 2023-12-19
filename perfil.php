

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Meu Perfil</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">

			
			
<?php
	if(isset($_SESSION['usuarioIdSite'])){
		$id = $_SESSION['usuarioIdSite'];
	}else{
		$id = 0;	
	}
	//Buscar os dados sobre cliente segundo o id do cliente vindo do pedido
	$result_cliente = "SELECT * FROM cliente WHERE id = '$id' LIMIT 1";
	$resultado_cliente = mysqli_query($conn, $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);
?>

<?php if($id != 0){?>

<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Perfil</h1>
	</div>

	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="editar_perfil">
				<button type="button" class="btn btn-sm btn-warning">
					Editar meu Perfil
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
</div>


<?php
	$result_lista_compra = "SELECT * FROM pedido WHERE id_cliente = '$id'";
	$resultado_lista_compra = mysqli_query($conn , $result_lista_compra);
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
						<th class="text-center">Numero pedido</th>
						<th class="text-center">Status do Pedido</th>
						<th class="text-center">Valor Total</th>
						<th class="text-center">Acesso</th>
						
					</tr>
				</thead>
				<tbody>
					<?php while($row_lista_compra = mysqli_fetch_assoc($resultado_lista_compra)){?>
						<tr>
							<td class="text-center"><?php echo $row_lista_compra["id"]; ?></td>
							<td class="text-center"><?php echo $row_lista_compra["status_venda"]; ?></td>
							<td class="text-center">R$ <?php echo number_format($row_lista_compra["valor_total"],2,",",".");?></td>
							<td class="text-center">
							<a href="pedido&id=<?php echo $row_lista_compra["id"]; ?>" class="btn btn-sm btn-warning">Ver</a>
							</td>							
						</tr>
					<?php }?>
				</tbody>
			</table>
        </div>
	</div>
</div>
<?php }else{?>	


<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h4>Perfil não existe, faça seu cadastro ou Login</h4>
	</div>

	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="cadastro">
				<button type="button" class="btn btn-sm btn-warning">
					cadastre-se
				</button>
			</a>
		</div>
	</div>

</div>

 
  <div class="col-lg-3">
 
     <form class="form-signin" method="POST" action="admin/valida-site.php">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail">Endereço de email</label>
      <input type="email" id="inputEmail" name="txt_usuario" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword">Senha</label>
      <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
		<p class="text-center text-danger">
	  		<?php if(isset($_SESSION['loginErroSite'])){
				echo $_SESSION['loginErroSite'];
				unset ($_SESSION['loginErroSite']);
			}?>
		</p>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>
	</div>
<?php }?>

					
					
			</div>

	
	
	

            </div>
			
        </div>
    </div>
    <!-- Checkout End -->
