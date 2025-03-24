<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xadrez</title>
</head>

<body>
    <main>
        <div class="xadrez">
            <h1>Xadrez</h1>
            <a href="itens.json" target="_blank">Ver arquivo JSON</a>
            <?php
            $data = json_decode(file_get_contents('./json_data/itens.json'), true);

            foreach ($data['xadrez'] as $item) {
                echo '<div class="game-item">';
                echo '<h2>' . htmlspecialchars($item['nome']) . '</h2>';
                echo '<img src="' . htmlspecialchars($item['imagem']) . '" alt="' . htmlspecialchars($item['nome']) . '">';
                echo '<p>' . htmlspecialchars($item['descricao']) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </main>
</body>

</html>