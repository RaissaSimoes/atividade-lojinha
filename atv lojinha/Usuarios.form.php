<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Usuários</title>
</head>
<body style="background-color: #e6dac6;">
<div style=" width: 470px; height: 580px; background-color:#e4e6c9; margin-left: 470px">
	<form id="frmUsuarios" method="POST" style="width: 400px; height: 550px; margin-left: 35px; margin-top: 23px;">
		<br><div class="form-group">
    <label for="idUsuario"></label>
    <input type="hidden" class="form-control" id="idUsuario">
  </div>
		<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
				<div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha">
  </div>
		<div class="form-group">
    <label for="idNivelUsuario"></label>
    <input type="hidden" class="form-control" id="idNivelUsuario">
  </div>
		<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome">
  </div>
		<div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" class="form-control" id="cpf">
  </div>
		<div class="form-group">
    <label for="endereco">Endereço:</label>
    <input type="text" class="form-control" id="endereco">
  </div>
		<div class="form-group">
    <label for="bairro">Bairro:</label>
    <input type="text" class="form-control" id="bairro">
  </div>
  		<div class="form-group">
    <label for="cidade">Cidade:</label>
    <input type="text" class="form-control" id="cidade">
  </div>
		<div class="form-group">
    <label for="cuf">UF:</label>
    <input type="text" class="form-control" id="uf">
  </div>
		<div class="form-group">
    <label for="cep">CEP:</label>
    <input type="text" class="form-control" id="cep">
  </div>
  		<div class="form-group">
    <label for="tel">Telefone:</label>
    <input type="tel" class="form-control" id="tel">
  </div>
  		<div class="form-group">
    <label for="foto">Foto:</label>
    <input type="file" class="form-control" id="foto">
  </div>
  		<div class="form-group">
    <label for="ativo"></label>
    <input type="hidden" class="form-control" id="ativo">
  </div>
		<button type="submit" class="btn btn-primary">Enviar</button>
		<button type="reset" class="btn btn-primary">Apagar</button>
	</form>
</div>	
</body>
</html>