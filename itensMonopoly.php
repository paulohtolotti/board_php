<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Monopoly</title>
</head>

<body>
    <header>
        <nav>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Monopoly</a></li>
            <li><a href="xadrez.php">Xadrez</a></li>
            <li><a href="dama.php">Dama</a></li>
            <li><a href="json_data/itens.json">Arquivo JSON</a></li>
        </nav>
    </header>
    <h1>Itens do Jogo Monopoly</h1>
    <div class="game-grid">
        <?php
        $data = json_decode(file_get_contents('./json_data/itens.json'), true);

        foreach ($data['itens'] as $item) {
            echo '<div class="game-wrap">';
            echo '<h2>' . htmlspecialchars($item['nome']) . '</h2>';
            echo '<p class="hero-text">' . htmlspecialchars($item['descricao']) . '</p>';
            echo '<img src="' . htmlspecialchars($item['imagem']) . '" class="game-img"' . htmlspecialchars($item['nome']) . '">';
            echo '</div>';
        }
        ?>
    </div>
    <footer>
        <p class="site-footer">Desenvolvido por: Artur Lombardi - Luis Paulo Andrade Silva - Matheus Batista Gonçalves - Paulo Henrique Tolotti </p>

    </footer>
</body>

</html>