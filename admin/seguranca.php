<?php
	function seguranca_adm(){
		if(isset($_SESSION['usuarioId'])){
			if((empty($_SESSION['usuarioId'])) || (empty($_SESSION['usuarioEmail'])) || (empty($_SESSION['usuarioNiveisAcessoId']))){		
				$_SESSION['loginErro'] = "Área restrita";
				header("Location: index.php");
			}else{
				if($_SESSION['usuarioNiveisAcessoId'] == "0"){
					$_SESSION['loginErro'] = "Área restrita";
					header("Location: index.php");
				}
			}
		}elseif(isset($_SESSION['usuarioId_adv'])){	
			if((empty($_SESSION['usuarioId_adv'])) || (empty($_SESSION['usuarioEmail_adv'])) || (empty($_SESSION['usuarioNiveisAcessoId_adv']))){		
				$_SESSION['loginErro'] = "Área restrita";
				header("Location: index.php");
			}else{
				if($_SESSION['usuarioNiveisAcessoId_adv'] == "0"){
					$_SESSION['loginErro'] = "Área restrita";
					header("Location: index.php");
				}
			}
		}elseif(isset($_SESSION['usuarioId_cli'])){	
			if((empty($_SESSION['usuarioId_cli'])) || (empty($_SESSION['usuarioEmail_cli'])) || (empty($_SESSION['usuarioNiveisAcessoId_cli']))){		
				$_SESSION['loginErro'] = "Área restrita";
				header("Location: index.php");
			}else{
				if($_SESSION['usuarioNiveisAcessoId_cli'] == "0"){
					$_SESSION['loginErro'] = "Área restrita";
					header("Location: index.php");
				}
			}
		}	
			
	}
?>