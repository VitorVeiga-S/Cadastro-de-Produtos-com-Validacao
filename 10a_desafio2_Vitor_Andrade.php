<?php
$mensagem = "";

if (isset($_GET['status']) && $_GET['status'] === 'sucesso') {
    $mensagem = "<p style='color: darkgreen;'>Produto cadastrado com sucesso!</p>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $nome_produto = trim($_POST["nome_produto"] ?? '');
    $preco = trim($_POST["preco"] ?? '');

    
    if (!empty($nome_produto) && !empty($preco)) {
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        
        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        
        $stmt = $conn->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
        $stmt->bind_param("sd", $nome_produto, $preco);

        if ($stmt->execute()) {
            
            $stmt->close();
            $conn->close();

            
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=sucesso");
            exit();
        } else {
            $mensagem = "<p style='color: red;'>Erro ao cadastrar no banco de dados.</p>";
        }

        $stmt->close();
        $conn->close();
    } else {
        $mensagem = "<p style='color: red;'>Por favor, preencha todos os campos!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <h1>Cadastro de Produtos</h1>

    <!-- Exibe a mensagem de retorno (sucesso ou erro) -->
    <?php if (!empty($mensagem)) { echo $mensagem; } ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="nome_produto">Nome do Produto: </label><br>
        <input type="text" id="nome_produto" name="nome_produto" required><br><br>

        <label for="preco">Preço: </label><br>
        <input type="number" id="preco" name="preco" step="0.01" min="0.01" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>