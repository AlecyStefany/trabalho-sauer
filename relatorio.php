<?php
include("registros.php");
include("conexaobanco.php");


$sql="SELECT data_pagamento from movimentacoes
 where tipo = 'Debito' and data_pagamento = (select max(data_pagamento) from movimentacoes)" ;


$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);
	if($linha = mysql_fetch_array($resultado)){
	$data_pagamento = trim($linha["data_pagamento"]);
	
	echo"Data da movimentação de Debito mais alta e :";
	echo date( 'd/m/Y', strtotime($data_pagamento));

	

}
$sql="SELECT data_pagamento from movimentacoes
 where tipo = 'Debito' and data_pagamento = (select min(data_pagamento) from movimentacoes)";

$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);
	while($linha = mysql_fetch_array($resultado)){
	$data_pagamento = trim($linha["data_pagamento"]);
	
	
	
	echo"<br>Data da movimentação de Debito mais baixa e:";
	
echo date('d/m/Y', strtotime($data_pagamento));
	
}

$sql="SELECT data_pagamento from movimentacoes
 where tipo = 'Credito' and data_pagamento = (select max(data_pagamento) from movimentacoes)" ;

$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);

if($linha = mysql_fetch_assoc($resultado)){
$data_pagamento = trim($linha["data_pagamento"]);
echo"<br>Data que a movimentação de credito foi mais alta:";

echo date('d/m/Y', strtotime($data_pagamento));
}

$sql="SELECT data_pagamento from movimentacoes
 where tipo = 'Credito' and data_pagamento = (select min(data_pagamento) from movimentacoes)" ;

$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);

while($linha = mysql_fetch_array($resultado)){
$data_pagamento = trim($linha["data_pagamento"]);

echo "<br>Data que a movimentação de credito foi mais baixa e:";
echo date('d/m/Y', strtotime($data_pagamento));

}


$sql="SELECT total_debito from movimentacoes";

$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);

if($linha = mysql_fetch_array($resultado)){
$total = trim($linha["total_debito"]);

echo "<br>Valor total das movimentações de debito e: $total_debito";

}

$sql="SELECT total_credito from movimentacoes";

$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);

if($linha = mysql_fetch_array($resultado)){
$total = trim($linha["total_credito"]);

echo "<br>Valor total por morador e: $total_credito";

}
?>