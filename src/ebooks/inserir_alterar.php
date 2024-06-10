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
			INSERT INTO ebooks (titulo, link, foto) 
			VALUES (:titulo, :link, :foto)
		");
		
		$resultado = $statement->execute(
			array(
				':titulo'	=>	$_POST["titulo"],
				':link'	=>	$_POST["link"],
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
			"UPDATE ebooks 
			SET `titulo` = :titulo,  `link` = :link, `foto` = :foto
			WHERE `id` = :id
			"
		);
		$resultado = $statement->execute(
			array(
				':titulo'	=>	$_POST["titulo"],
				':link'	=>	$_POST["link"],
				':foto'		=>	$imagem,
				':id'			=>	$_POST["ebook_id"],
			)
		);


		
		if(!empty($resultado))
		{
			echo 'Feito com sucesso !';
		}
	}
}

?>