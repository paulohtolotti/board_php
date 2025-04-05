<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dama</title>
</head>

<body>
    <header>
        <nav>
            <li><a href="index.html">Home</a></li>
            <li><a href="itensMonopoly.php">Monopoly</a></li>
            <li><a href="xadrez.php">Xadrez</a></li>
            <li><a href="#">Dama</a></li>
            <li><a href="json_data/itens.json">Arquivo JSON</a></li>
        </nav>
    </header>
    <main>
            <h1>Dama</h1>
            <div class="game-grid">
                <?php
                $data = json_decode(file_get_contents('./json_data/itens.json'), true);
                foreach ($data['dama'] as $item) {
                    echo '<div class="game-wrap">';
                    echo '<h2>' . htmlspecialchars($item['nome']) . '</h2>';
                    echo '<p class="hero-text">' . htmlspecialchars($item['descricao']) . '</p>';
                    if (is_array($item['imagem'])) {
                        foreach ($item['imagem'] as $img) {
                            echo '<img src="' . htmlspecialchars($img) . '"style="width: 300px; height: auto;" class="hero-img"' . '">';
                        }
                    } else {
                        echo '<img src="' . htmlspecialchars($item['imagem']) . '"style="width: 300px; height: auto;" alt=""' . '">';
                    }
                    htmlspecialchars($item['nome']) . '">';
                    echo '</div>';
                }
                ?>
            </div>
    </main>
    <footer>
        <p class="site-footer">Desenvolvido por: Artur Lombardi - Luis Paulo Andrade Silva - Matheus Batista Gonçalves - Paulo Henrique Tolotti </p>
    </footer>
</body>

</html>