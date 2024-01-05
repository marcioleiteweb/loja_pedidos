<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Correios</title>
</head>
<body>
    <h1>Correios</h1>
    <h2>Busca Cep:</h2>
    <form name="Form1" id="Form1">
        CEP: <input type="text" name="Cep" id="Cep"><br>
        <input type="submit" value="Buscar">
    </form>
    <div class="ResultadoCep"></div>

    <!-- Baixe o jquery no site jquery.com -->
    <script src="jquery-2.2.4.js"></script>
    <script src="chamaCorreios.js"></script>
</body>
</html>