<?php 

	//Verificar se autenticação foi realizada
	$usuario_autenticado = false;

	//Usuários do Sistema (Hardcode, ainda sem Banco de Dados)
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
	);

	foreach ($usuarios_app as $user) {
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		}
	}

	if ($usuario_autenticado) {
		echo 'Usuário Autenticado';
	} else{
		header('Location:index.php?login=erro');
	}

 ?>