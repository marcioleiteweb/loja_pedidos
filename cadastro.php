

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Cadastro</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">

				
				
				
 <div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Cadastro</h1>
	</div>

	<form class="form-horizontal" method="POST" action="admin/administrativo/processa/cadastra/adm_proc_cad_membro.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome" required class="form-control" id="inputEmail3" placeholder="Nome Completo">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
				<input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Coloque aqui seu melhor email">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input type="password" name="senha" required class="form-control" id="inputPassword3" placeholder="Senha">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Celular</label>
			<div class="col-sm-10">
				<input type="numbe" id="celular" name="celular" class="form-control" maxlength="14" id="inputEmail3" placeholder="Celular">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Data de Nascimento</label>
			<div class="col-sm-10">
				  <input type="date" class="form-control">
			</div>
		</div>
		
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Rua</label>
			<div class="col-sm-10">
				<input type="text" name="rua" required class="form-control" id="inputEmail3" placeholder="Rua">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Bairro</label>
			<div class="col-sm-10">
				<input type="text" name="bairro" required class="form-control" id="inputEmail3" placeholder="Bairro">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Cidade</label>
			<div class="col-sm-10">
				<input type="text" name="cidade" required class="form-control" id="inputEmail3" placeholder="Cidade">
			</div>
		</div>
		
<div class="form-group">
	<label class="col-sm-2 control-label">Estado</label>
	<div class="col-sm-10">		
		<select class="form-select" name="uf" aria-label="Default select example">
			<option selected value="AC">AC</option>	
			<option value="AL">AL</option>
			<option value="AP">AP</option>
			<option value="AM">AM</option>
			<option value="BA">BA</option>	
			<option value="CE">CE</option>	
			<option value="DF">DF</option>	
			<option value="ES">ES</option>	
			<option value="GO">GO</option>	
			<option value="MA">MA</option>
			<option value="MT">MT</option>
			<option value="MS">MS</option>
			<option value="MG">MG</option>
			<option value="PA">PA</option>	
			<option value="PB">PB</option>	
			<option value="PR">PR</option>
			<option value="PE">PE</option>
			<option value="PI">PI</option>	
			<option value="RJ">RJ</option>
			<option value="RN">RN</option>
			<option value="RS">RS</option>
			<option value="RO">RO</option>	
			<option value="RR">RR</option>	
			<option value="SC">SC</option>
			<option value="SP">SP</option>	
			<option value="SE">SE</option>	
			<option value="TO">TO</option>
		</select>
	</div>
</div>
		
		
		<div class="form-group">
			<label class="col-sm-2 control-label">CEP</label>
			<div class="col-sm-10">
				<input type="numb" id="cep" name="cep" required class="form-control" maxlength="9" id="inputEmail3" placeholder="CEP">
			</div>
		</div>
		
		
		
		<div class="form-group">
          <p>
           <label class="radio-inline col-sm-4"><input type="radio" name="optradio" value="juridica" onclick="pessoa(this.value);">Pessoa Juridica</label>
            <label class="radio-inline col-sm-4"><input type="radio" name="optradio" value="fisica" onclick="pessoa(this.value);">Pessoa Fisica</label>
          </p>
          </div>

        <div id="juridica" style="display:none;">
        
           <div class="form-group">
            <label class="control-label col-sm-2" for="txtCnpj">CNPJ: *</label>
            <div class="col-sm-3">
              <input type="numbe" class="form-control cnpj" id="cnpj" name="cpf" maxlength="18" placeholder="CNPJ">
            </div>
          </div>
          </div>

          <div id="fisica" style="display:none;">
          
           <div class="form-group">
            <label class="control-label col-sm-2" for="txtCPF">CPF: *</label>
            <div class="col-sm-3">
              <input type="numbe" class="form-control cpf" id="cpf" name="cpf" maxlength="14" placeholder="CPF">
            </div>
			
          </div>
          </div>`


<script id="rendered-js" >
document.addEventListener('keydown', function(event) { //pega o evento de precionar uma tecla
  if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla precionada nao e um backspace e delete
    var i = document.getElementById("cpf").value.length; //aqui pega o tamanho do input
    if (i === 3 || i === 7) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
      document.getElementById("cpf").value = document.getElementById("cpf").value + ".";
    else if (i === 11) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
      document.getElementById("cpf").value = document.getElementById("cpf").value + "-";
  }
});
document.addEventListener('keydown', function(event) { //pega o evento de precionar uma tecla
  if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla precionada nao e um backspace e delete
    var i = document.getElementById("cnpj").value.length; //aqui pega o tamanho do input
    if (i === 2 || i === 6) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
      document.getElementById("cnpj").value = document.getElementById("cnpj").value + ".";
    else if (i === 10) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
      document.getElementById("cnpj").value = document.getElementById("cnpj").value + "/";
	  else if (i === 15) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
      document.getElementById("cnpj").value = document.getElementById("cnpj").value + "-";
  }
});
document.addEventListener('keydown', function(event) { //pega o evento de precionar uma tecla
  if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla precionada nao e um backspace e delete
    var i = document.getElementById("celular").value.length; //aqui pega o tamanho do input
    if (i === 0 || i === 0) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
      document.getElementById("celular").value = document.getElementById("celular").value + "(";
    else if (i === 3) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
      document.getElementById("celular").value = document.getElementById("celular").value + ")";
	  else if (i === 9) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
      document.getElementById("celular").value = document.getElementById("celular").value + "-";
  }
});
document.addEventListener('keydown', function(event) { //pega o evento de precionar uma tecla
  if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla precionada nao e um backspace e delete
    var i = document.getElementById("cep").value.length; //aqui pega o tamanho do input
    if (i ===5 || i === 5) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
      document.getElementById("cep").value = document.getElementById("cep").value + "-";
  }
});
</script>


	<script>
    function pessoa(tipo){
      if(tipo=="fisica"){
      document.getElementById("fisica").style.display = "inline";
      document.getElementById("juridica").style.display = "none";
      }else if(tipo=="juridica"){
      document.getElementById("fisica").style.display = "none";
      document.getElementById("juridica").style.display = "inline";

      }

    }
  </script>
		<input type="hidden" id="postId" name="cad_ext" value="1" />
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</div>
	</form>
</div>
					
					
 </div>
  <div class="col-lg-3">
 
     <form class="form-signin" method="POST" action="admin/valida-site.php">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail">Endereço de email</label>
      <input type="email" id="inputEmail" name="txt_usuario" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword">Senha</label>
      <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
		<p class="text-center text-danger">
	  		<?php if(isset($_SESSION['loginErroSite'])){
				echo $_SESSION['loginErroSite'];
				unset ($_SESSION['loginErroSite']);
			}?>
		</p>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>
	</div>

            </div>
			
        </div>
    </div>
    <!-- Checkout End -->
