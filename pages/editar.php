<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id=?");
$stmt->execute([$id]);
$p = $stmt->fetch();

if ($_POST) {
    $sql = "UPDATE produtos SET nome=?, descricao=?, quantidade=?, preco=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nome'],
        $_POST['descricao'],
        $_POST['quantidade'],
        $_POST['preco'],
        $id
    ]);
    header("Location: index.php");
}
?>

<h2>Editar Produto</h2>

<form method="post">
    <input type="text" name="nome" value="<?= $p['nome'] ?>">
    <textarea name="descricao"><?= $p['descricao'] ?></textarea>
    <input type="number" name="quantidade" value="<?= $p['quantidade'] ?>">
    <input type="number" step="0.01" name="preco" value="<?= $p['preco'] ?>">
    <button>Atualizar</button>
</form>