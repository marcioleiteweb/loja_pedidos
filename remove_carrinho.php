<?php
	include_once("admin/conexao/conexao.php");
	$id_remove = $_GET['id'];
	
	$result_categorias_produtos = "DELETE FROM carrinho WHERE id = '$id_remove'";
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);	
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
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=carrinho'>
				<script type=\"text/javascript\">
					alert(\"Não Removido.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>