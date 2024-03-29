

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
					<div class="carousel-item active position-relative" style="height: 430px;">
						<img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px;">
								<h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Artigos</h1>
								<p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
								<a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">saiba mais</a>
							</div>
						</div>
					</div>
					<div class="carousel-item position-relative" style="height: 430px;">
						<img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px;">
								<h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Espadas</h1>
								<p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
								<a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">saiba mais</a>
							</div>
						</div>
					</div>
					<div class="carousel-item position-relative" style="height: 430px;">
						<img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px;">
								<h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Armas</h1>
								<p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
								<a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">saiba mais</a>
							</div>
						</div>
					</div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </button>
				</div>

				
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">off 15%</h6>
                        <h3 class="text-white mb-3">Armas Especiais</h3>
                        <a href="loja" class="btn btn-primary">Loja</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">off 7%</h6>
                        <h3 class="text-white mb-3">Artigos</h3>
                        <a href="loja" class="btn btn-primary">Loja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Produtos de Qualidade</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Esolha antes de Pagar</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Variedade</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Atendimento Seguro</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

<?php
	//$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos_home = "SELECT * FROM produtos WHERE situacoes_produto_id = 1";
	$resultado_produtos_home = mysqli_query($conn, $result_produtos_home);
	;
?>



    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Produtos em Destaque</span></h2>
        <div class="row px-xl-5">
		
		<?php while($row_produtos_home = mysqli_fetch_assoc($resultado_produtos_home)){?>
		
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="imagem_produto/<?php echo $row_produtos_home["foto"]; ?>" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="produto&id=<?php echo $row_produtos_home["id"]; ?>"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="produto&id=<?php echo $row_produtos_home["id"]; ?>"><?php echo $row_produtos_home['nome'];?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>R$ <?php echo number_format($row_produtos_home["preco"],2,",",".");?></h5>
                        </div>
                    </div>
                </div>
            </div>
		<?php }?>	
			
			
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 15%</h6>
                        <h3 class="text-white mb-3">Armas Especiais</h3>
                        <a href="loja" class="btn btn-primary">Loja</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 7%</h6>
                        <h3 class="text-white mb-3">Artigos Especiais</h3>
                        <a href="loja" class="btn btn-primary">Loja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->




    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
