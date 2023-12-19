<?php
	include_once("../../../conexao/conexao.php");
	
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$status_venda = mysqli_real_escape_string($conn, $_POST['status_venda']);
	
	
	$result_status_venda = "UPDATE pedido SET status_venda='$status_venda' WHERE id = '$id'";
	$resultado_status_venda = mysqli_query($conn, $result_status_venda);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=80&id=".$id."'>
				<script type=\"text/javascript\">
					alert(\"alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=80&id=".$id."'>
				<script type=\"text/javascript\">
					alert(\"não foi alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>