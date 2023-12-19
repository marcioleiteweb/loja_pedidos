<?php

	if(isset($_SESSION['usuarioIdSite'])){
		$cliente = $_SESSION['usuarioIdSite'];
	}else{
		$cliente = 0;
	}
	
	if(isset($_GET['id'])){
		$id_pedido = $_GET['id'];
	}else{
		$id_pedido = 0;
	}
	//echo "<h2>$id_pedido</h2>";
	
		//Buscar os dados sobre pedido segundo id
	$result_pedido = "SELECT * FROM pedido WHERE id = '$id_pedido' LIMIT 1";
	$resultado_pedido = mysqli_query($conn, $result_pedido);
	$row_pedido = mysqli_fetch_assoc($resultado_pedido);
	
	$result_produto_carrinho = "SELECT * FROM pedido_lista WHERE id_pedido = '$id_pedido'";
	$resultado_produto_carrinho = mysqli_query($conn , $result_produto_carrinho);
	
	
	
?>
<?php if($cliente != 0){?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Resumo do pedido</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
					<?php
					while($row_produto_carrinho = mysqli_fetch_assoc($resultado_produto_carrinho)){
						?>
                        <tr>
                            <td class="align-middle"><img src="imagem_produto/<?php echo $row_produto_carrinho['foto_produto'];?>" alt="" style="width: 50px;"> <?php echo $row_produto_carrinho['nome_produto']; ?></td>
                            <td class="align-middle">R$ <?php echo number_format($row_produto_carrinho['preco_produto'],2,",","."); ?></td>

                        </tr>
					<?php }?>	
						
						
						
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
			<!--
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
			-->	
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Valor Pedido</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6></h6>
                            <h6>
							<?php
								$frete = 45.50;
							?>
							</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Frete Fixo</h6>
                            <h6 class="font-weight-medium">R$ <?php echo number_format($frete,2,",",".");?></h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>R$ <?php echo number_format($row_pedido['valor_total'],2,",",".");?></h5>
                        </div>



                <form class="mb-30" action="admin/administrativo/processa/cadastra/add_pedido.php" method="POST">
                    <div class="input-group">
							<input type="hidden" id="valor_total" name="valor_total" value="" />
							<input type="hidden" id="id_cliente" name="id_cliente" value="" />
                        <div class="input-group-append">
						<button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Baixar PDF</button>
                        </div>
                    </div>
                </form>
						
						
						
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
<?php }else{?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Usuario não logado</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<?php }?>