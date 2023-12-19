<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM produtos WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);
	
	$_SESSION['idProduto'] = $row_produtos['id'];
	$_SESSION['nomeProduto'] = $row_produtos['nome'];
	$_SESSION['precoProduto'] = $row_produtos['preco'];
	$_SESSION['fotoProduto'] = $row_produtos['foto'];
	
	$mostra_id_prod = $_SESSION['idProduto'];


		//Buscar os dados referente ao usuario situado neste id
	$result_album = "SELECT * FROM fotos_produtos  WHERE id_produto = '$id'";
	$resultado_album = mysqli_query($conn, $result_album);		
?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Detalhes do Produto</span>
                    <span class="breadcrumb-item active"></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?php echo 'imagem_produto/'.$row_produtos['foto'];?>" alt="Image">
                        </div>
						<?php while($row_album = mysqli_fetch_assoc($resultado_album)){?>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?php echo 'imagem_produto/'.$row_produtos['produto_album'];?>/<?php echo $row_album['fotos_produto'];?>" alt="Image">
                        </div>
						<?php }?>
                        
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $row_produtos['nome']; ?></h3>

                    <h3 class="font-weight-semi-bold mb-4">R$ <?php echo number_format($row_produtos["preco"],2,",",".");?></h3>
                    <p class="mb-4">
					Loja apenas de pedidos, finalize a compra com o vendedor!
						</p>
                    <div class="d-flex align-items-center mb-4 pt-2">

                        <a href="add_carrinho.php" class="btn btn-primary px-3">
						<i class="fa fa-shopping-cart mr-1"></i>
						Add no Carrinho
						</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Descrição</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Descrição do Produto</h4>
                            <?php echo $row_produtos['descricao']; ?>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->
