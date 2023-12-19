<?php
	$result_produtos = "SELECT * FROM produtos";
	$resultado_produtos = mysqli_query($conn , $result_produtos);
	
	if(isset($_GET['id_cat'])){
		$id_cat = $_GET['id_cat'];
		//echo $id_cat;
	}else{
		$id_cat = 0;
		//echo $id_cat; 
		
	} 
	
	$result_produtos_cat = "SELECT * FROM produtos 	WHERE categorias_produto_id = '$id_cat'";
	$resultado_produtos_cat = mysqli_query($conn , $result_produtos_cat);
	
	
	$result_categoria = "SELECT * FROM categorias_produtos WHERE id = '$id_cat'";
	$resultado_categoria = mysqli_query($conn , $result_categoria);
	$row_categoria = mysqli_fetch_assoc($resultado_categoria);
	
?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">
					<?php
					if(isset($row_categoria)){
						echo "Loja: <b>".$row_categoria['nome']."</b>";
					}else{
						echo "Loja";
					}
					?>
					</span>
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
					<?php if($id_cat == 0){?>
					
					<?php while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){?>
					
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="imagem_produto/<?php echo $row_produtos["foto"]; ?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="produto&id=<?php echo $row_produtos["id"]; ?>"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="produto&id=<?php echo $row_produtos["id"]; ?>"><?php echo $row_produtos["nome"]; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>R$ <?php echo number_format($row_produtos["preco"],2,",",".");?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php }?>
					
					<?php }else{?>
					
					<?php while($row_produtos_cat = mysqli_fetch_assoc($resultado_produtos_cat)){?>
					
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="imagem_produto/<?php echo $row_produtos_cat["foto"]; ?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="produto&id=<?php echo $row_produtos_cat["id"]; ?>"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="produto&id=<?php echo $row_produtos_cat["id"]; ?>"><?php echo $row_produtos_cat["nome"]; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>R$ <?php echo number_format($row_produtos_cat["preco"],2,",",".");?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php }?>
					
					<?php }?>

                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->
