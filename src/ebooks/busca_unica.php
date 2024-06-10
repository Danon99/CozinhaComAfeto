<?php
include('db.php');
include('funcoes.php');
if(isset($_POST["ebook_id"]))
{
	$saida = array();
	
	$statement = $connection->prepare(
		"SELECT * FROM ebooks 
		WHERE id = '".$_POST["ebook_id"]."' 
		LIMIT 1"
	);
	
	$statement->execute();
	$resultado = $statement->fetchAll();
	
	foreach($resultado as $linha)
	{
		$saida["titulo"] = $linha["titulo"];
		$saida["link"] = $linha["link"];

		if($linha["foto"] != '')
		{
			$saida['foto'] = '<img src="upload/'.$linha["foto"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_usuario_imagem" value="'.$linha["foto"].'" />';
		}
		else
		{
			$saida['foto'] = '<input type="hidden" name="hidden_usuario_imagem" value="" />';
		}
	}
	echo json_encode($saida);
}
?>