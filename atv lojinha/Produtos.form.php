<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Produtos</title>
</head>
<body style="background-color: #e6dac6;">
<div style=" width: 470px; height: 580px; background-color:#e4e6c9; margin-left: 470px">
	<form id="frmProdutos" method="POST" style="width: 400px; height: 550px; margin-left: 35px; margin-top: 23px;">
		<br><div class="form-group">
    <label for="idProdutol"></label>
    <input type="hidden" class="form-control" id="idProduto">
  </div>
		<div class="form-group">
    <label for="fabricante">Fabricante:</label>
    <input type="text" class="form-control" id="fabricante">
  </div>
		<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome">
  </div>
		<div class="form-group">
    <label for="modelo">Modelo:</label>
    <input type="text" class="form-control" id="modelo">
  </div>
		<div class="form-group">
    <label for="idCategoria"></label>
    <input type="hidden" class="form-control" id="idCategoria">
  </div>
		<div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" id="descricao">
  </div>
		<div class="form-group">
    <label for="unidadeMedida">Unidade Medida:</label>
    <input type="text" class="form-control" id="unidadeMedida">
  </div>
  		<div class="form-group">
    <label for="largura">Largura:</label>
    <input type="number" class="form-control" id="lrgura">
  </div>		
  		<div class="form-group">
    <label for="altura">Altura</label>
    <input type"number" class="form-control" id="altura">
  </div>
  		<div class="form-group">
    <label for="profundidade">Profundidade:</label>
    <input type="number" class="form-control" id="profundidade">
  </div>
  		<div class="form-group">
    <label for="peso">Peso:</label>
    <input type="number" class="form-control" id="peso">
  </div>
  		<div class="form-group">
    <label for="cor">Cor:</label>
    <input type="color" class="form-control" id="cor">
  </div>
		<button type="submit" class="btn btn-primary">Enviar</button>
		<button type="reset" class="btn btn-primary">Apagar</button>
	</form>
</div>	
</body>
</html>