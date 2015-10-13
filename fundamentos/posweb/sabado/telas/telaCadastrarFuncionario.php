<?php
include "topo.html";
?>

<div class="container">
  <h2>Formulário para testar Operação</h2>
  <form role="form" action="../servicos/funcionarioService.php" method="GET" >
  
    <div class="form-group">
      <label for="nomeFuncionario">Nome:</label>
      <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control"  placeholder="Digite nomeFuncionario">
    </div>
	
	<div class="form-group">
      <label for="matriculaFuncionario">Matrícula:</label>
      <input type="text" name="matriculaFuncionario" id="matriculaFuncionario" class="form-control"  placeholder="Digite nomeFuncionario">
    </div>
	
	
	<div class="form-group">
      <label for="funcao">Função:</label>
      <input type="text" name="funcao" id="funcao" class="form-control"  placeholder="Digite nomeFuncionario">
    </div>

    <input type="hidden" name="operacao" value="incluir" />
	
	
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
include "rodape.html";
?>
