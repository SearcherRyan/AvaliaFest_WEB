<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $datainicio = $_POST['datainicio'];
    $datafim = $_POST['datafim'];
    $local = $_POST['local'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $sql = "INSERT INTO festival (nome, datainicio, datafim, localfestival, descricao, statusfestival)
            VALUES (:nome, :datainicio, :datafim, :local, :descricao, :status)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':datainicio', $datainicio);
    $stmt->bindParam(':datafim', $datafim);
    $stmt->bindParam(':local', $local);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':status', $status);
    
    if ($stmt->execute()) {
        echo "Festival criado com sucesso!";
    } else {
        echo "Erro ao criar festival.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Festival</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Criar Novo Festival</h1>
    <form action="criar_festival.php" method="POST">
        <label for="nome">Nome do Festival:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="datainicio">Data de Início:</label>
        <input type="date" id="datainicio" name="datainicio" required><br><br>

        <label for="datafim">Data de Fim:</label>
        <input type="date" id="datafim" name="datafim" required><br><br>

        <label for="local">Local do Festival:</label>
        <input type="text" id="local" name="local" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <label for="status">Status do Festival:</label>
        <input type="text" id="status" name="status" required><br><br>

        <button type="submit">Criar Festival</button>
    </form>
</body>
</html>
