<?php
	include_once("admin/conexao/conexao.php");
	$id_remove = $_GET['id'];
	
	if(isset($_SESSION['usuarioIdSite'])){
		$id_cliente = $_SESSION['usuarioIdSite'];
		if(isset($id_remove)){
			$result_categorias_produtos = "DELETE FROM carrinho WHERE id = '$id_remove'";
			$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);	
		}
	}
	if(mysqli_affected_rows($conn) != 0){
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=carrinho'>";	
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=carrinho'>";	
			$_SESSION['msgErroAddCard'] = "Não Removido";
			$_SESSION['corAlert'] = "danger";			
}?>
<?php $conn->close(); ?>