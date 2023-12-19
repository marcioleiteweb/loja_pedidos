<?php	
	session_start();
	include_once("admin/conexao/conexao.php");
	
	$nome_produto = $_SESSION['nomeProduto'];
	$preco_produto = $_SESSION['precoProduto'];
	
		//$string = "$preco_produto";
		//$numero = str_replace('.', '', $string); // remove o ponto
		//$real =  $numero;
		
		//echo $real;
	


	$foto_produto = $_SESSION['fotoProduto'];
	$id_produto = $_SESSION['idProduto'];
	$id_cliente = $_SESSION['usuarioIdSite'];
	

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
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro'>
				<script type=\"text/javascript\">
					alert(\"Para adicionar o produto, antes faça seu login ou cadastro\");
				</script>
			";
	}	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=carrinho'>
				<script type=\"text/javascript\">
					alert(\"add carrinho.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro'>
				<script type=\"text/javascript\">
					alert(\"Faça seu cadastro!\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>