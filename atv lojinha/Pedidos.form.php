<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Pedidos</title>
</head>
<body style="background-color: #e6dac6;">
<div style=" width: 470px; height: 580px; background-color:#e4e6c9; margin-left: 470px">
	<form id="frmPedidos" method="POST" style="width: 400px; height: 550px; margin-left: 35px; margin-top: 23px;">
		<br><div class="form-group">
    <label for="idPedido"></label>
    <input type="hidden" class="form-control" id="idPedido">
  </div>
		<div class="form-group">
    <label for="idUsuario"></label>
    <input type="hidden" class="form-control" id="idUsuario">
  </div>
				<div class="form-group">
    <label for="dtPedido">Data Pedido:</label>
    <input type="date" class="form-control" id="dtPedido">
  </div>
		<div class="form-group">
    <label for="dtPagamento">Data Pagamento:</label>
    <input type="date" class="form-control" id="dtPagamento">
  </div>
		<div class="form-group">
    <label for="dtNotaFiscal">Data Nota Fiscal:</label>
    <input type="date" class="form-control" id="dtNotaFiscal">
  </div>
		<div class="form-group">
    <label for="notaFiscal">Nota Fiscal:</label>
    <input type="text" class="form-control" id="notaFiscal">
  </div>
		<div class="form-group">
    <label for="dtEnvio">Data Envio:</label>
    <input type="date" class="form-control" id="dtEnvio">
  </div>
  		<div class="form-group">
    <label for="dtRecebimento">Data Recebimento:</label>
    <input type="date" class="form-control" id="dtRecebimento">
  </div>
  		<div class="form-group">
    <label for="tipoFrete">Tipo Frete:</label>
    <input type="number" class="form-control" id="tipoFrete">
  </div>
  		<div class="form-group">
    <label for="rastrioFrete">Rastreio Frete:</label>
    <input type="text" class="form-control" id="restreioFrete">
  </div>
  		<div class="form-group">
    <label for="entregaEndereco">Entrega Endereço:</label>
    <input type="text" class="form-control" id="entregaEndereco">
  </div>
  		<div class="form-group">
    <label for="entregaCompl">Entrega Complemento:</label>
    <input type="text" class="form-control" id="entregaCompl">
  </div>
  		<div class="form-group">
    <label for="entregaBairro">Entrega Bairro:</label>
    <input type="text" class="form-control" id="entregaBairro">
  </div>
    		<div class="form-group">
    <label for="entregaCidade">Entrega Cidade:</label>
    <input type="text" class="form-control" id="entregaCidade">
  </div>
    		<div class="form-group">
    <label for="entregaUF">Entrega UF:</label>
    <input type="text" class="form-control" id="entregaUF">
  </div>
    		<div class="form-group">
    <label for="entregaCEP">Entrega CEP:</label>
    <input type="text" class="form-control" id="entregaCEP">
  </div>
    		<div class="form-group">
    <label for="entregaTelefone">Entrega Telefone:</label>
    <input type="text" class="form-control" id="entregaTelefone">
  </div>
    		<div class="form-group">
    <label for="entregaRefer">Entrega ReferÊncia:</label>
    <input type="text" class="form-control" id="entregaRefer">
  </div>
    		<div class="form-group">
    <label for="vaorTotal">Valor Total:</label>
    <input type="number" class="form-control" id="valorTotal">
  </div>
        		<div class="form-group">
    <label for="qtdItems">Quantidade Items:</label>
    <input type="number" class="form-control" id="qtdItems">
  </div>
        		<div class="form-group">
    <label for="dtDevolucao">Data Devolução:</label>
    <input type="date" class="form-control" id="dtDevolucao">
  </div>
        		<div class="form-group">
    <label for="motivoDevolucao">Motivo Devolução:</label>
    <input type="text" class="form-control" id="motivoDevolucao">
  </div>    
		<button type="submit" class="btn btn-primary">Enviar</button>
		<button type="reset" class="btn btn-primary">Apagar</button>
	</form>
</div>	
</body>
</html>