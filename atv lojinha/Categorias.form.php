<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Categorias</title>
</head>
<body style="background-color: #e6dac6;">
<div style=" width: 470px; height: 580px; background-color:#e4e6c9; margin-left: 470px">
	<form id="frmCategorias" method="POST" style="width: 400px; height: 550px; margin-left: 35px; margin-top: 23px;">
		<br><div class="form-group">
    <label for="idCategoria">Id Categoria:</label>
    <input type="hidden" class="form-control" id="idCategoria">
  </div>
		<div class="form-group">
    <label for="senha">Descrição:</label>
    <input type="text" class="form-control" id="descricao">
  </div>
		<button type="submit" class="btn btn-primary">Enviar</button>
		<button type="reset" class="btn btn-primary">Apagar</button>
	</form>
</div>	
</body>
</html>