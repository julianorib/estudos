<!DOCTYPE html>
<html>
<head>
    <title>Bem vindo ao Cadastro de Produtos</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Bem vindo ao Cadastro de Produtos</h1>
        <button onclick="window.location.href='cadastro.php'">Cadastrar Produtos</button>
        <button onclick="window.location.href='produtos.php'">Visualizar Produtos</button>
        <br><br>
        <?php
        echo "<p style='font-size: small;'>Host: " . $_SERVER['HTTP_HOST'] . "</p>";
        ?>
    </div>
</body>
</html>