<?php
	function seguranca_adm_site(){
		if(isset($_SESSION['usuarioIdSite'])){
				if((empty($_SESSION['usuarioIdSite'])) || (empty($_SESSION['usuarioEmailSite']))){		
					$_SESSION['loginErroSite'] = "Área restrita";
					header("Location: ../cadastro");
				}
			}
		}
?>