<?php

include('db.php');
include("funcoes.php");

if(isset($_POST["ebook_id"]))
{
	$imagem = get_imagem_nome($_POST["ebook_id"]);
	
	if($imagem != '')
	{
		unlink("upload/" . $imagem);
	}
	
	$statement = $connection->prepare(
		"DELETE FROM ebooks WHERE id = :id"
	);
	$resultado = $statement->execute(
		array(
			':id'	=>	$_POST["ebook_id"]
		)
	);
	
	if(!empty($resultado))
	{
		echo 'Feito com sucesso';
	}
}



?>