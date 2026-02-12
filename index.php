<?php
require "config/database.php";

$page = $_GET['page'] ?? 'listar';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Estoque</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <h1>📦 Sistema de Controle de Estoque</h1>
    <nav>
        <a href="index.php?page=listar">Listar Produtos</a>
        <a href="index.php?page=cadastrar">Cadastrar Produto</a>
    </nav>
</header>

<main>
<?php
switch ($page) {
    case 'cadastrar':
        include "pages/cadastrar.php";
        break;
    case 'editar':
        include "pages/editar.php";
        break;
    case 'excluir':
        include "pages/excluir.php";
        break;
    default:
        include "pages/listar.php";
}
?>
</main>

</body>
</html>