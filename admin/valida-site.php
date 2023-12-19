<?php
	session_start();
	include_once("conexao/conexao.php");
	//Verifica se os campos possuem dados
	
	if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){
			$usuario = mysqli_real_escape_string($conn, $_POST['txt_usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
			$senha = mysqli_real_escape_string($conn, $_POST['txt_senha']);
			$senha = md5($senha);
			
			$result_usuario = "SELECT * FROM cliente WHERE email = '$usuario' && senha = '$senha'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			$resultado = mysqli_fetch_assoc($resultado_usuario);
			
			
			
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado)){
			$_SESSION['usuarioIdSite'] = $resultado['id'];
			$_SESSION['usuarioNomeSite'] = $resultado['nome'];
			$_SESSION['usuarioEmailSite'] = $resultado['email'];
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../cadastro'>
			";
			$_SESSION['loginErroSite'] = "Seja bem Vindo";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../cadastro'>
			";
			$_SESSION['loginErroSite'] = "Usuario Não Encontrado";
		}
	}else{
		$_SESSION['loginErroSite'] = "Erro - Entre em contato gmcriacaodesites@gmail.com";
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../cadastro'>
			";
	}
?>