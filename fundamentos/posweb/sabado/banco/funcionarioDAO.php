<?php
include "../conexao/conexao.php";

/*
 * Função listar
 */
function listar(){
	// Executa uma consulta que pega cinco notícias
$sql = "SELECT matricula, nome, funcao FROM funcionario";

$query = mysql_query($sql);
	while ($dados = mysql_fetch_array($query)) {
	  echo 'ID: ' . $dados['matricula'] . " - ";
	  echo 'Título: ' . $dados['nome'] . " - ";
	  echo 'Título: ' . $dados['funcao'] . '<BR/>';
	}

echo 'Registros encontrados: ' . mysql_num_rows($query );
}


function incluir($nome, $matricula, $funcao){

$sql = "INSERT INTO funcionario(matricula, nome, funcao) VALUES ('$matricula','$nome','$funcao')";
$query = mysql_query($sql);

if(mysql_error()){
	echo "falha na inclusão".mysql_error();
}else{
	echo "sucesso na inclusão";
}	

}












?>