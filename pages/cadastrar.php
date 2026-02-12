<?php
if ($_POST) {
    $sql = "INSERT INTO produtos (nome, descricao, quantidade, preco)
            VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nome'],
        $_POST['descricao'],
        $_POST['quantidade'],
        $_POST['preco']
    ]);
    header("Location: index.php");
}
?>

<h2>Cadastrar Tijolo</h2>

<form method="POST" action="index.php?page=salvar">
    <input type="text" name="nome" placeholder="Nome do tijolo" required>

    <select name="tipo" required>
        <option value="">Tipo do tijolo</option>
        <option value="Cerâmico 6 furos">Cerâmico 6 furos</option>
        <option value="Cerâmico 8 furos">Cerâmico 8 furos</option>
        <option value="Maciço">Maciço</option>
        <option value="Concreto">Concreto estrutural</option>
        <option value="Ecológico">Ecológico</option>
    </select>

    <input type="number" step="0.01" name="peso" placeholder="Peso (kg)" required>

    <input type="number" step="0.01" name="preco" placeholder="Preço (ex: 67.50)" required>

    <input type="number" name="quantidade" placeholder="Quantidade em estoque" required>

    <button type="submit">Salvar Tijolo</button>
</form>