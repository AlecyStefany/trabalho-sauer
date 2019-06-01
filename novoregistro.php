<!DOCTYPE >

<head>
<title>Finanças</title>
</head>

<body>
<div align="center">

<h1>Cadastro de Nova Movimentação </h1>
<form action="insere.php" method="post">

	  <h4>Data do lançamento:
		<input type="date" required="required" maxlength="10"
		name="data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
		min="2019-03-19" max="2020-12-31" />


	 <h4> Descrição:
	  <input type="text" required="required" name="copasa"
		pattern="[0-9]+$" />


	 <h4>Valor:
	  <input type="text" required="required" name="cemig"
		pattern="[0-9]+$" />
      
      <h4>Data do Pagamento:
	 <input type="date" required="required" maxlength="10"
		name="data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
		min="2019-03-19" max="2020-12-31" />

	 <h4> Data do Vencimento:
	  <input type="date" required="required" maxlength="10"
		name="data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
		min="2019-03-19" max="2020-12-31"/>

	  <h4>Forma de Pagamento:	
	  <select name="qtde">
	  	<?php
	   	echo "<option value='Dinheiro'>Dinheiro</option>";		
	   	echo "<option value='Cartão'>Cartão</option>";	
	   	echo "<option value='Cheque'>Cheque</option>";	
	   	echo "<option value='Boleto'>Cheque</option>";

	  	?>
		</select>
		
		 <h4>Tipo:
		
	  	<select name="qtde">
	  		 <?php
		echo "<option value='Débito'>Débito</option>";		
	   	echo "<option value='Credito'>Credito</option>";
	   	?>
	   </select><br><br>


		Parcelado:	
	  	<select name="qtde">
	  		<?php
		echo "<option value='Sim'>Sim</option>";		
	   	echo "<option value='Não'>Não</option>";
	   	?>	
		</select><br><br>


	   Quantas Parcelas:
	    <select name="qtde"><br><br>

	   		<?php
	   			for ($i=1;$i<=10;$i++)
	   			{
	   			  echo "<option value='$i'>$i</option>";		
	   			}
	   		?>
		</select>

	   <br><br>	
      
      <input type="submit" value="Validar" onclick="window.location.href='insereregistro.php'">
     

</form>
</div>
</body>
</html>
