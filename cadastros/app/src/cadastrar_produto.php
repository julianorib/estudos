<!DOCTYPE html>
<html>
<?php include 'connect.php';?>
<head>
    <title>Cadastrado</title>
</head>
<body>
    <div style="text-align: center;">
    <button onclick="window.location.href='index.php'">Voltar</button>
    <br><br>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Conecta ao banco de dados
  $conexao = new mysqli($servername, $username, $password, $dbname);
  
  // Verifica se houve algum erro na conexão
  if ($conexao->connect_error) {
      die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
  }
  
  // Obtém os valores do formulário
  $produto = $_POST['produto'];
  $valor = $_POST['valor'];
  $descricao = $_POST['descricao'];
  
  // Prepara o comando SQL para inserir os dados na tabela "produtos"
  $sql = "INSERT INTO produtos (produtos, valor, descricao) VALUES ('$produto', '$valor', '$descricao')";
  
  // Executa o comando SQL
  if ($conexao->query($sql) === true) {
      echo 'Produto cadastrado com sucesso!';
  } else {
      echo 'Erro ao cadastrar o produto: ' . $conexao->error;
  }
  
  // Fecha a conexão com o banco de dados
  $conexao->close();
}
?>
</body>
</html>
