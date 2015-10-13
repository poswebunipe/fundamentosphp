<?php
include ("../banco/funcionarioDAO.php");

$operacao = $_POST['operacao'];

//Operação incluir
if($operacao=='incluir'){
	
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$funcao = $_POST['funcao'];
		
	incluir($nome, $matricula, $funcao);
	
	listar();
	
}

// Operação listar
if($operacao=="listar"){
	
listar();	
}



?>