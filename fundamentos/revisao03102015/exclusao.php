<?php 
include('conexao.php');

$id = $_GET['id'];


$SQL_DELETE = "delete from produto where id=$id ";

$res = mysql_query($SQL_DELETE);

if($res){
	echo "Registro Excluido com sucesso";
}else{
	echo "Falha na exclusão registro".mysql_error();
}
echo "<a href=\"http://localhost/fujioka/formproduto.html\">";
echo "Voltar </a>"; 

?>