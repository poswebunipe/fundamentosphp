<?php

function validarEmprestimo($salario, $valorEmprestimo){
	
	$valorLimite = $salario * 0.3;
	
	if($valorEmprestimo <= $valorLimite){
		return true;
	}
	
	return false;	
}



?>