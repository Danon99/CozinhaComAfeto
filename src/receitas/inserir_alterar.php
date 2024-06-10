<?php
include('db.php');
include('funcoes.php');
if(isset($_POST["operacao"]))
{
	if($_POST["operacao"] == "Salvar")
	{
		$imagem = '';
		if($_FILES["foto"]["name"] != '')
		{
			$imagem = upload_imagem();
		}
		
		$statement = $connection->prepare("
			INSERT INTO receitas (titulo, ingredientes, modo_preparo, foto, categoria_id) 
			VALUES (:titulo, :ingredientes, :modo_preparo, :foto, :categoria_id)
		");
		
		$resultado = $statement->execute(
			array(
				':titulo'	=>	$_POST["titulo"],
				':ingredientes'	=>	$_POST["ingredientes"],
				':modo_preparo'	=>	$_POST["modo_preparo"],
				':categoria_id'	=>	$_POST["categoria_id"],
				':foto'		=>	$imagem
			)
		);
		if(!empty($resultado))
		{
			echo 'Feito com sucesso !';
		}
	}
	if($_POST["operacao"] == "Editar")
	{
		
		$imagem = '';

		if($_FILES["foto"]["name"] != '')
		{
			$imagem = upload_imagem();
		}
		else
		{
			$imagem = $_POST["hidden_usuario_imagem"];
		}
		$statement = $connection->prepare(
			"UPDATE receitas 
			SET `titulo` = :titulo, `ingredientes` = :ingredientes, `modo_preparo` = :modo_preparo, `foto` = :foto, `categoria_id` = :categoria_id  
			WHERE `id` = :id
			"
		);
		$resultado = $statement->execute(
			array(
				':titulo'	=>	$_POST["titulo"],
				':ingredientes'	=>	$_POST["ingredientes"],
				':modo_preparo'	=>	$_POST["modo_preparo"],
				':foto'		=>	$imagem,
				':id'			=>	$_POST["receita_id"],
				':categoria_id'			=>	$_POST["categoria_id"],
			)
		);


		
		if(!empty($resultado))
		{
			echo 'Feito com sucesso !';
		}
	}
}

?>