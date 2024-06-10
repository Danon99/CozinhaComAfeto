<?php

include('db.php');
include("funcoes.php");

if(isset($_POST["receita_id"]))
{
	$imagem = get_imagem_nome($_POST["receita_id"]);
	
	if($imagem != '')
	{
		unlink("upload/" . $imagem);
	}
	
	$statement = $connection->prepare(
		"DELETE FROM receitas WHERE id = :id"
	);
	$resultado = $statement->execute(
		array(
			':id'	=>	$_POST["receita_id"]
		)
	);
	
	if(!empty($resultado))
	{
		echo 'Feito com sucesso';
	}
}



?>