<?php
$stmt = $pdo->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll();
?>

<h2>Estoque de Tijolos</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Peso (kg)</th>
        <th>Preço (R$)</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

</table>