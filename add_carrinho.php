<?php	
	session_start();
	include_once("admin/conexao/conexao.php");
	
	$nome_produto = $_SESSION['nomeProduto'];
	$preco_produto = $_SESSION['precoProduto'];


	$foto_produto = $_SESSION['fotoProduto'];
	$id_produto = $_SESSION['idProduto'];
	
	if(isset($_SESSION['usuarioIdSite'])){
		$id_cliente = $_SESSION['usuarioIdSite'];
	}
	

	if(isset($id_cliente)){
	$result_carrinho = "INSERT INTO carrinho (nome_produto, preco_produto, foto_produto ,id_produto, id_cliente) VALUES ('$nome_produto', '$preco_produto' ,'$foto_produto','$id_produto', '$id_cliente')";
	$resultado_carrinho = mysqli_query($conn, $result_carrinho);
	
	unset(
		$_SESSION['nomeProduto'],
		$_SESSION['precoProduto'],
		$_SESSION['fotoProduto'],
		$_SESSION['idProduto']
	);
	
	}else{
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro'>";
			$_SESSION['msgErroAddCard'] = "Para adicionar o produto, antes faça seu login ou cadastro.";
			$_SESSION['corAlert'] = "danger";
	}

	if(mysqli_affected_rows($conn) != 0){
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=carrinho'>";
		$_SESSION['msgErroAddCard'] = "Add no carrinho com sucesso!";
		$_SESSION['corAlert'] = "success";	
	}	
?>
<?php $conn->close(); ?>