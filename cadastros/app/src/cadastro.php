<!DOCTYPE html>
<html>
<?php include 'connect.php';?>
<head>
    <title>Cadastro de Produtos</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post" action="cadastrar_produto.php">
        <h2>Cadastre um novo produto</h2>
        <input type="text" name="produto" placeholder="Produto" required>
        <input type="text" name="descricao" placeholder="Descrição" required>
        <input type="text" name="valor" placeholder="Valor" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>