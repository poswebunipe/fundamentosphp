
<?php 

/**
* Função que vai incluir um funcionário no banco de dados.
* Essa função não retorna nada.
*/
function incluirFuncionario($matriculaFuncionario, $nome, $funcao){
	
	
	//Função que vai ser utilizada para incluir o usuário.
	echo "Matrícula: ".$matriculaFuncionario;
	quebrarLinha();
	echo "Nome: ".$funcao;
	quebrarLinha();
	echo "Função: ".$funcao;
	

}

//Função que escreve a TAG html <BR/> que vai querar a linha.
// Um função simples que apenas faz a inserção da informação, ou seja, quebra a linha
function quebrarLinha(){
	echo "<BR/>";
}

?>

