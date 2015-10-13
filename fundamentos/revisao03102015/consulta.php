<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include('conexao.php');
$id = $_GET['id'];

$SQL_CONSULTA = "select * from produto where id=$id";
//executa a consulta no banco de dados. 
$res = mysql_query($SQL_CONSULTA);
//recupera o registro da consulta no banco e 
//associa a variavel linha
$linha = mysql_fetch_assoc($res);

?>



<div class="container">
  <h2>Vertical (basic) Form</h2>
  <form role="form"  action="alterar.php">
    
     <div class="form-group">
      <label for="Id">ID:</label>
      <input type="text" name="id" class="form-control" id="id" placeholder="informe o id" value=" <?php echo "$linha[id]" ?> ">
    </div>
	
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" class="form-control" id="nome" placeholder="informe o nome" value=" <?php echo "$linha[nome]" ?> ">
    </div>
	
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Informe a descrição" value="<?php echo "$linha[descricao]" ?>">
    </div>
	
    <div class="form-group">
      <label for="quantidade">Quantidade:</label>
      <input type="text" name="quantidade" class="form-control" id="quantidade" placeholder="Informe a quantidade" value="<?php echo "$linha[quantidade]" ?>">
    </div>	
 
    <button type="submit" class="btn btn-default">Salvar</button>
  </form>
</div>

</body> 
</html>
