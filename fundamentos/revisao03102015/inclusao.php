<?php 
include('conexao.php');

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$quantidade = $_GET['quantidade'];

$SQL_INSERT = "insert into produto (nome,descricao,quantidade) values ($nome,$descricao,$quantidade)";

$res = mysql_query($SQL_INSERT);

if($res){
	echo "Registro Gravado";
}else{
	echo "Falha na gravação do registro".mysql_error();
}
echo "<a href=\"http://localhost/fujioka/formproduto.html\">";
echo "Voltar </a>"; 

?>