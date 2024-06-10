<?php
include('db.php');
include('funcoes.php');
if(isset($_POST["operacao"]))
{
	if($_POST["operacao"] == "Salvar")
	{
		
		
		$statement = $connection->prepare("
			INSERT INTO categorias (nome) 
			VALUES (:nome)
		");
		
		$resultado = $statement->execute(
			array(
				':nome'	=>	$_POST["nome"]
			)
		);
		if(!empty($resultado))
		{
			echo 'Feito com sucesso !';
		}
	}
	if($_POST["operacao"] == "Editar")
	{
		

		$statement = $connection->prepare(
			"UPDATE categorias 
			SET `nome` = :nome  
			WHERE `id` = :id
			"
		);
		$resultado = $statement->execute(
			array(
				':nome'	=>	$_POST["nome"],
				':id'			=>	$_POST["categoria_id"]
			)
		);

		if(!empty($resultado))
		{
			echo 'Feito com sucesso !';
		}
	}
}

?>