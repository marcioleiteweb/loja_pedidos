<?php
//verifica se foi postado uma pesquisa de produto
	if(isset($_POST['pesquisar'])){
		//busca no banco o termo pesquisado
		$pesquisar = $_POST['pesquisar'];
		$result_busca_home = "SELECT * FROM produtos WHERE nome LIKE '%".$pesquisar."%' LIMIT 30";
		$resultado_busca_home = mysqli_query($conn, $result_busca_home);
		
		$result_retorna = "SELECT * FROM produtos WHERE nome LIKE '%".$pesquisar."%' LIMIT 1";
		$resultado_retorna = mysqli_query($conn, $result_retorna);
		$row_retorna = mysqli_fetch_assoc($resultado_retorna);
	}
	
?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">
					Buscar Produto:
					<b>
					<?php
					if(isset($row_retorna)){	
						echo "$pesquisar";
					}else{
						echo "Produto não encontrado";	
					}					
					?>
					</b></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
		


            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="ml-2">
                  
                            </div>
                        </div>
                    </div>
					
					<?php while($row_produtos_buscar = mysqli_fetch_assoc($resultado_busca_home)){?>
					
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="imagem_produto/<?php echo $row_produtos_buscar["foto"]; ?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="produto&id=<?php echo $row_produtos_buscar["id"]; ?>"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="produto&id=<?php echo $row_produtos_buscar["id"]; ?>"><?php echo $row_produtos_buscar["nome"]; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>R$ <?php echo number_format($row_produtos_buscar["preco"],2,",",".");?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php }?>
					


                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->
