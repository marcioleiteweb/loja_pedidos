<?php

// Carregar o Composer
require './vendor/autoload.php';

// Referenciar o namespace Dompdf
use Dompdf\Dompdf;

// Instanciar e usar a classe dompdf
$dompdf = new Dompdf(['enable_remote' => true]);
$dompdf->set_base_path("css/bootstrap.css");


$dados = "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<link href='css/custom.css' rel='stylesheet'>";
$dados .= "<title>MLBN - Loja</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= '
 <main id="main" class="main">
	
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Pedido</h1>
	</div>

	<dl class="dl-horizontal">
		<dt>Dados do Cliente:</dt>
		<dd></dd>
		<dt>Nome Completo: </dt>
		<dd>Joao Winzel</dd>
		<dt>Email: </dt>
		<dd>joaow123@gmail.com</dd>
		<dt>Senha Cadastrada: </dt>
		<dd>123</dd>
		<dt>WhatsApp: </dt>
		<dd>(11)97456-1454</dd>
		<dt>CPF ou CNPJ: </dt>
		<dd>654.984.984-98</dd>
		<dt>Dados de Evio:</dt>
		<dd></dd>
		<dt>Rua: </dt>
		<dd>Rua Topazio, 123</dd>
		<dt>Bairro: </dt>
		<dd>Morada do Sol</dd>
		<dt>Cidade: </dt>
		<dd>Vargem Grande Paulista</dd>
		<dt>Estado: </dt>
		<dd>SP</dd>
		<dt>CEP: </dt>
		<dd>06730-000</dd>	
	</dl>
</div>


<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Lista de Compras</h1>
	</div>
	<div class="row espaco">
		
	</div>
	<div class="row">
        <div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Produto</th>
						<th class="text-center">Valor</th>
						<th class="text-center">Foto</th>
					</tr>
				</thead>
				<tbody>
											<tr>
							<td class="text-center">29</td>
							<td class="text-center">Espada Rei</td>
							<td class="text-center">R$ 1.200,50</td>
							<td class="text-center"><img src="../../imagem_produto/1699988787.jpg" alt="" style="width: 50px;"></td>
						</tr>
											<tr>
							<td class="text-center">30</td>
							<td class="text-center">Estatua Mago</td>
							<td class="text-center">R$ 55,50</td>
							<td class="text-center"><img src="../../imagem_produto/1699566802.jpg" alt="" style="width: 50px;"></td>
						</tr>
									</tbody>
			</table>
			<dl class="dl-horizontal">
				<dt>Valor Total: </dt>
				<dd class="alert alert-success" role="alert"><h3>R$ 1.301,50</h3></dd>	
			</dl>
        </div>
	</div>
</div>
  </main><!-- End #main -->
';
$dados .= "</body>";

// Instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->loadHtml($dados);

// Configurar o tamanho e a orientacao do papel
// landscape - Imprimir no formato paisagem
//$dompdf->setPaper('A4', 'landscape');
// portrait - Imprimir no formato retrato
$dompdf->setPaper('A4', 'portrait');

// Renderizar o HTML como PDF
$dompdf->render();

// Gerar o PDF
$dompdf->stream();