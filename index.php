<?php
	session_start();
	include_once("admin/seguranca-site.php");
	include_once("admin/conexao/conexao.php");
	seguranca_adm_site();
	
	$result_categorias_produtos = "SELECT * FROM categorias_produtos";
	$resultado_categorias_produtos = mysqli_query($conn , $result_categorias_produtos);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Ateliê - Gitano</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="historia">Nossa História</a>
                    <a class="text-body mr-3" href="">Contato</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Minha Conta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">
								<?php
								if(isset($_SESSION['usuarioNomeSite'])){
									echo "<a href='perfil' class='dropdown-item' >perfil</a>";
								}else{
									echo "Visitante";	
								}
								?>
							</button>
                            <a href="cadastro" class="dropdown-item" >Login</a>
                            <a href="admin/sair_site.php" class="dropdown-item">Sair</a>
                        </div>
                    </div>

                
                </div>

            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-2">
                <a href="" class="text-decoration-none">
                    <img src="img/logo-correto.png" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-8 col-8 text-left">
                <form action="buscar" method="POST">
                    <div class="input-group">
                        <input type="text" name="pesquisar" class="form-control" placeholder="Achar Produtos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <button type="submit" class="busca_zero_css"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-6 text-right">
                <p class="m-0">
				<?php
				if(isset($_SESSION['usuarioNomeSite'])){
					echo $_SESSION['usuarioNomeSite'];
				}else{
					echo "Visitante";	
				}
				?>
				</p>
				<p class="text-center text-danger">
					<?php if(isset($_SESSION['loginErroSite'])){
						echo $_SESSION['loginErroSite'];
						unset ($_SESSION['loginErroSite']);
					}?>
				</p>
				 <p class="m-3">
				 <a href="admin/sair_site.php" class="btn btn-lg btn-primary btn-block">Sair</a>
				 </p>
                <h5 class="m-0">11 98888-5555</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
					<?php while($row_categorias_produtos = mysqli_fetch_assoc($resultado_categorias_produtos)){?>
                        <a href="loja&id_cat=<?php echo $row_categorias_produtos['id']?>" class="nav-item nav-link"><?php echo $row_categorias_produtos['nome']?></a>
					<?php }?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
						<img src="img/logo-correto.png" class="img-fluid">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="home" class="nav-item nav-link active">Home</a>
                            <a href="loja" class="nav-item nav-link">Loja</a>
                            <a href="cadastro" class="nav-item nav-link">Cadastrar</a>
                            <a href="carrinho" class="nav-item nav-link">Carrinho</a>
                        </div>
            
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

<?php 
  //include_once("menu.php");
			$url = (isset($_GET['url'])) ? $_GET['url']:'';
			$explode = explode('/',$url);

			$paginas = array(
			'home', 
			'historia', 
			'loja', 
			'cadastro', 
			'produto', 
			'carrinho', 
			'buscar', 
			'produto-busca',
			'remove_carrinho',
			'perfil','pedido',
			'editar_perfil');

		if(isset($explode[0])&& $explode[0] == ''){
			include "home.php";
		}elseif($explode[0]!=''){
			if(isset($explode[0]) && in_array($explode[0],$paginas)){
			include $explode[0].".php";
		}else{
			include "home.php";
			}
		}
?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Seja Bem Vindo</h5>
                <p class="mb-4">Tenha certeza de aqui encontrar artigos medievais diversos todos artesanais, relamente feitos a mão lhe proporcionam uma experiência única</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Vargem Grande Paulista - SP</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@seusite.com.br</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>(11) 98888-5555</p>
            </div>
            <div class="col-lg-8 col-md-12">
			
			
                <div class="row">
                    <div class="col-md-4 mb-5">
                        
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Siga das Redes</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
				
				
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Ateliê - Gitano</a>. Todos os direitos resrvados. Feito por:
                    <a class="text-primary" href="https://api.whatsapp.com/send?phone=5511933351840">MLBN</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>