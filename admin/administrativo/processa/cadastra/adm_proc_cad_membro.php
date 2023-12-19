<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> 
		<?php
		include_once("../../../conexao/conexao.php");
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
	
			//busca se já existe o documento cadastrado
			$result_doc = "SELECT * FROM cliente WHERE cpf = '$doc' LIMIT 1";
			$resultado_doc = mysqli_query($conn, $result_doc);
			$row_doc = mysqli_fetch_assoc($resultado_doc);

			//busca se já existe o email cadastrado
			$result_email = "SELECT * FROM cliente WHERE email = '$email' LIMIT 1";
			$resultado_email = mysqli_query($conn, $result_email);
			$row_email = mysqli_fetch_assoc($resultado_email);

				//verifica se algumas das informações já estao cadastradas
				if(isset($row_doc)){
					if($cad_ext == 1){	
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../home'>
						<script type=\"text/javascript\">
							alert(\"Cliente já cadastrado!.\");
						</script>
					"; 
					}else{
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=60'>
						<script type=\"text/javascript\">
							alert(\"Cliente já cadastrado!.\");
						</script>
					"; 
					}
				}elseif(isset($row_email)){
					if($cad_ext == 1){	
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../home'>
						<script type=\"text/javascript\">
							alert(\"Cliente já cadastrado!.\");
						</script>
					"; 
					}else{
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=60'>
						<script type=\"text/javascript\">
							alert(\"Cliente já cadastrado!.\");
						</script>
					"; 
					}
				//caso ja nao seja cadastrada as informações verificadas ai ele cadastra	
				}else{
				$result_produtos = "INSERT INTO  cliente (nome, celular, email, senha, senha_real,  data_nascimento, cpf, rua, bairro, cidade, uf, cep, descricao) VALUES ('$nome', '$celular', '$email', '$senha', '$senha_real',  '$data_nascimento', '$doc', '$rua', '$bairro', '$cidade', '$uf', '$cep', '$descricao')";
				$resultado_produtos = mysqli_query($conn, $result_produtos);	
				}
						
				
				
				if(mysqli_affected_rows($conn) != 0){
					if($cad_ext == 1){	
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../home'>
						<script type=\"text/javascript\">
							alert(\"foi cadastrado com sucesso!.\");
						</script>
					"; 
					}else{
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=60'>
						<script type=\"text/javascript\">
							alert(\"foi cadastrado com sucesso!.\");
						</script>
					"; 
					}
					
				}else{
					if($cad_ext == 1){
				 	echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../home'>
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
	</body>
</html>
<?php $conn->close(); ?>