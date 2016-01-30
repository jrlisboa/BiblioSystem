<?php
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$db="bd_biblio";

	$conexao= mysql_connect($servidor,$usuario,$senha) or die ("erro de conexão!!!".mysql_error());
	mysql_select_db($db) or die ("banco de dados não pode ser selecionado corretamente".mysql_error());
?>