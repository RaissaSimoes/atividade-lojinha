<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Estoque</title>
</head>
<body style="background-color: #e6dac6;">
<div style=" width: 470px; height: 580px; background-color:#e4e6c9; margin-left: 470px">
	<form id="frmEstoque" method="POST" style="width: 400px; height: 550px; margin-left: 35px; margin-top: 23px;">
		<br><div class="form-group">
    <label for="idEstoque"></label>
    <input type="hidden" class="form-control" id="idEstoque">
  </div>
		<div class="form-group">
    <label for="idProduto"></label>
    <input type="hidden" class="form-control" id="idProduto">
  </div>
		<div class="form-group">
    <label for="dtEntrada">Data Entrada:</label>
    <input type="date" class="form-control" id="dtEntrada">
  </div>
		<div class="form-group">
    <label for="quantidade">Quantidade:</label>
    <input type="number" class="form-control" id="quantidade">
  </div>
		<div class="form-group">
    <label for="dtFabricacao">Data Fabricação:</label>
    <input type="date" class="form-control" id="dtFabricacao">
  </div>
		<div class="form-group">
    <label for="dtVencimento">Data Vencimento:</label>
    <input type="date" class="form-control" id="dtVencimento">
  </div>
		<div class="form-group">
    <label for="nfCompra">Compra:</label>
    <input type="text" class="form-control" id="nfCompra">
  </div>
		<div class="form-group">
    <label for="precoCompra">Preço Compra:</label>
    <input type="number" class="form-control" id="precoCompra">
  </div>
		<div class="form-group">
    <label for="icmsCompra">icmsCompra:</label>
    <input type="number" class="form-control" id="icmsCompra">
  </div>
		<div class="form-group">
    <label for="precoCompra">Preço Compra:</label>
    <input type="number" class="form-control" id="precoCompra">
  </div>
		<div class="form-group">
    <label for="qtdVendida">Quantidade Vendida:</label>
    <input type="number" class="form-control" id="qtdVendida">
  </div>
		<div class="form-group">
    <label for="qtdOcorrencia">Quantidade Ocorrencia:</label>
    <input type="number" class="form-control" id="qtdOcorrencia">
  </div>
  		<div class="form-group">
    <label for="ocorrencia">Ocorrencia:</label>
    <input type="text" class="form-control" id="ocorrencia">
  </div>
		<button type="submit" class="btn btn-primary">Enviar</button>
		<button type="reset" class="btn btn-primary">Apagar</button>
	</form>
</div>	
</body>
</html>