<html>
<head>
<title>Exclusão de Cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=5 align="center">Exibição de Clientes</td>
  </tr>
  <tr>
    <th>ID</th>
    <th>Quantidade</th>
    <th>Nome</th>
    <th>Valor</th>
    <th>Data de Compra</th>
  </tr>
  <?php
  // Incluindo o arquivo de configuração do banco de dados
  include('config.php');

  // Consulta SQL para selecionar todos os clientes
  $sql = "SELECT id, Quantidade, nome, valor, Data_compra FROM cliente";
  $result = $mysqli->query($sql);

  // Verificando se há resultados
  if ($result->num_rows > 0) {
      // Loop através dos resultados da consulta e exibição em uma tabela
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['Quantidade'] . "</td>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['valor'] . "</td>";
          echo "<td>" . $row['Data_compra'] . "</td>";
          echo "</tr>";
      }
  } else {
      echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
  }
  ?>
</table>
</body>
</html>
