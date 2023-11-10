<!DOCTYPE html>
<html>
<?php include 'connect.php';?>
<head>
    <title>Visualizar Produtos</title>
</head>
<body>
    <div style="text-align: center;">
    <button onclick="window.location.href='index.php'">Voltar</button>
    <br><br>

<?php
    // Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta para buscar os dados da tabela produtos
$sql = "SELECT ID, Produtos, Descricao, Valor FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Produtos</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["ID"]."</td>
                <td>".$row["Produtos"]."</td>
                <td>".$row["Descricao"]."</td>
                <td>".$row["Valor"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
</div>
</body>
</html>
