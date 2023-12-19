<?php
	include_once("../../../conexao/conexao.php");
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		
		$cad_ext = mysqli_real_escape_string($conn, $_POST['cad_ext']);
		
		$nome = mysqli_real_escape_string($conn, $_POST['nome']);
		$celular = mysqli_real_escape_string($conn, $_POST['celular']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
		$senha_real = mysqli_real_escape_string($conn, $_POST['senha']);
		$data_nascimento = mysqli_real_escape_string($conn, $_POST['data_nascimento']);
		$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
		$cnpj = mysqli_real_escape_string($conn, $_POST['cnpj']);
		$rua = mysqli_real_escape_string($conn, $_POST['rua']);
		$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
		$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
		$uf = mysqli_real_escape_string($conn, $_POST['uf']);
		$cep = mysqli_real_escape_string($conn, $_POST['cep']);
		$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
		
	if(!empty($cpf)) {    
	   $doc = $cpf;	
	}elseif(!empty($cnpj)){
		$doc = $cnpj;
	}
	
			//nome, celular, email, senha, senha_real,  data_nascimento, cpf, rua, bairro, cidade, uf, cep, descricao	
			$result_usuario = "UPDATE cliente SET nome = '$nome', celular = '$celular', email = '$email', senha = '$senha', senha_real = '$senha_real',  data_nascimento = '$data_nascimento', cpf = '$doc', rua = '$rua', bairro = '$bairro', cidade = '$cidade', uf = '$uf', cep = '$cep', descricao = '$descricao' WHERE id = '$id'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
				
				if(mysqli_affected_rows($conn) != 0){
						if($cad_ext == 1){	
							echo "
								<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../perfil'>
								<script type=\"text/javascript\">
									alert(\"foi alterado com sucesso!.\");
								</script>
							"; 
						}else{
							echo "
								<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=60'>
								<script type=\"text/javascript\">
									alert(\"foi alterado com sucesso!.\");
								</script>
							"; 
						}
				}else{
						if($cad_ext == 1){
							echo "
								<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../perfil'>
								<script type=\"text/javascript\">
									alert(\"não foi cadastrado!.\");
								</script>
							";
						}else{
							echo "
								<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=60'>
								<script type=\"text/javascript\">
									alert(\"não foi cadastrado!.\");
								</script>
							";
						}
				}
?>