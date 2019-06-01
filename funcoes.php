<?php

function conecta( $maquina , $usuario, $senha, $banco, $sql )
{
	error_reporting(0);
    $conexao = mysql_connect($maquina,$usuario,$senha) or die("Erro na Conexao"); 
	$db = mysql_select_db($banco,$conexao) or die("Erro na selecao do banco");
	$resultado = mysql_query($sql,$conexao) or die("Erro na query");
	mysqli_close($conexao);
	return $resultado;
}
