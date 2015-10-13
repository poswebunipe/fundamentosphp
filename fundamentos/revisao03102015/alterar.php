<?php 
include('conexao.php');

$id = $_GET['id'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$quantidade = $_GET['quantidade'];

$SQL_UPDATE = "update produto set nome=$nome,descricao=$descricao, quantidade=$quantidade where id=$id ";

$res = mysql_query($SQL_UPDATE);

if($res){
	echo "Registro alterado com sucesso";
}else{
	echo "Falha na gravação do registro".mysql_error();
}
echo "<a href=\"http://localhost/fujioka/formproduto.html\">";
echo "Voltar </a>"; 

?>