<html>

<head>
<title>Cadastro de Clientes</title>

<?php include ('config.php');  ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form action="produto.php" method="post" name="produto">
<table width="200" border="1">
  <tr>
    <td colspan="2">Cadastro de Produtos</td>
  </tr>
  <tr>
    <td width="53">Cod.</td>
    <td width="131">&nbsp;
  </tr>
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" ></td>
  </tr>
  <tr>
    <td>quantidade:</td>
    <td><input type="text" name="quantidade" ></td>
  </tr>
  <tr>
    <td>valor:</td>
    <td><input type="float" name="valor"> 
    </td>
  </tr>
  <tr>
    <td>data_compra:</td>
    <td><input type="date" name="data_compra" ></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><input type="submit" value="Comprar" name="botao"></td>
    </tr>	
</table>
</form>

<?php
if (@$_POST['botao'] == "Comprar") 
	{
		
		$nome = $_POST['nome'];
		$quantidade = $_POST['quantidade'];
		$valor = $_POST['valor'];
		$data_compra = $_POST['data_compra'];
		
		$insere = "INSERT into cliente (nome, quantidade, valor, data_compra) 
    VALUES ('$nome', '$quantidade', '$valor', '$data_compra')";
    mysqli_query($mysqli, $insere) or die ("Não foi possivel inserir os dados");
    

}
	

?>

<a href="index.html" >Home </a>
</body>
</html>
