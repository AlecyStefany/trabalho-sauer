<?php
include("funcoes.php");
include("conexaobanco.php");


$valor=$_POST["valor"];
$categoria=$_POST["categoria"];
$data_pagamento=$_POST["data_pagamento"];
$data_vencimento =$_POST["data_vencimento"];
$forma_pagamento=$_POST["forma_pagamento"];
$tipo= $_POST["tipo"];
$situacao=$_POST["situacao"];
$parcela = $_POST["parcela"];
$parcelado=$_POST["parcelado"];

$total = $total + $valor;

$sql="insert into movimentacoes (valor,categoria,data_pagamento,data_vencimento,forma_pagamento,tipo,situacao,parcela,parcelado) values ('$valor','$categoria','$data_pagamento','$data_vencimento','$forma_pagamento','$tipo','$situacao','$parcela','$parcelado')";

$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

