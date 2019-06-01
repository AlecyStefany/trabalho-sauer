<?php
include("funcoes.php");
include("conexaobanco.php");
?>


<!DOCTYPE html>
<html>
<head>
<title>Condominio</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>

<body>
<div align='center'>


<table>
  <tr>
    <th>Data</th>
    <th>Copasa</th>
    <th>Cemig</th>
    <th>Tarifa</th>
    <th>Limpeza</th>        
    <th>Outros</th>
    <th>Total Condominio</th>
    <th>Total das Despesas</th>
  </tr>

<?php
	
	$sql="select * from Condominio group by data_condominio";
	$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

	while($linha=mysql_fetch_array($resultado))
    {
    $data=trim($linha["data_condominio"]);
    $copasa=trim($linha["copasa"]);
    $cemig=trim($linha["cemig"]);
    $tarifa=trim($linha["tarifa"]);
    $limpeza=trim($linha["limpeza"]);
    $outros=trim($linha["outros"]);
    $totalcondominio=trim($linha["total_condominio"]);
    $totaldespesas=trim($linha["total_despesas"]);

		echo"
		  <tr>
		    <td>$data</td>
		    <td>$copasa</td>
		    <td>$cemig</td>
		    <td>$tarifa</td>
		    <td>$limpeza</td>
		    <td>$outros</td>
        <td>$totalcondominio</td>
        <td>$totaldespesas</td>
		  </tr>
		";
	}
mysql_close($conexao);	
?>

</table>

<br>
<button onclick="window.location.href='index.php'">Voltar</button>

</div>
</body>
</html>

