<?php
include 'db_connect.php';

$sql = "SELECT * FROM festival";
$stmt = $conn->query($sql);
$festivais = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Festivais</title>
</head>
<body>
    <h1>Festivais Cadastrados</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Início</th>
            <th>Data de Fim</th>
            <th>Local</th>
            <th>Descrição</th>
            <th>Status</th>
        </tr>
        <?php foreach ($festivais as $festival): ?>
            <tr>
                <td><?= $festival['id'] ?></td>
                <td><?= $festival['nome'] ?></td>
                <td><?= $festival['datainicio'] ?></td>
                <td><?= $festival['datafim'] ?></td>
                <td><?= $festival['localfestival'] ?></td>
                <td><?= $festival['descricao'] ?></td>
                <td><?= $festival['statusfestival'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
