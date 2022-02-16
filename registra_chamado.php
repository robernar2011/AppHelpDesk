<?php

	session_start();

	//Montagem do texto a ser escrito
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//EOL = End of line
	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;


	//Função nativa do PHP para abrir arquivo
	$arquivo = fopen('arquivo.hd', 'a');

	//Função para escrever arquivo
	fwrite($arquivo, $texto);

	//Função para fechar arquivo
	fclose($arquivo);

	//Retornar para a página Abrir Chamado
	header('Location: abrir_chamado.php');
?>