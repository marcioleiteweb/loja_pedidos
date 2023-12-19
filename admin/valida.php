<?php
	session_start();
	include_once("conexao/conexao.php");
	//Verifica se os campos possuem dados
	
	if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){
			$usuario = mysqli_real_escape_string($conn, $_POST['txt_usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
			$senha = mysqli_real_escape_string($conn, $_POST['txt_senha']);
			$senha = md5($senha);
			
			$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			$resultado = mysqli_fetch_assoc($resultado_usuario);
			
			
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			header("Location: administrativo.php");
		}else{
			$_SESSION['loginErro'] = "usuario não encontrado";
			header("Location: index.php");
		}
	}else{
		$_SESSION['loginErro'] = "Erro - Entre em contato gmcriacaodesites@gmail.com";
		header("Location: index.php");
	}
?>