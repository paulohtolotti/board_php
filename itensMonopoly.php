<h1>Itens do Jogo Monopoly</h1>
<p>Abaixo estão os itens do jogo Monopoly. Clique no link para visualizar os detalhes no arquivo JSON.</p>

<div class="itens de jogo">
    <?php
    $data = json_decode(file_get_contents('itens.json'), true);

    foreach ($data['itens'] as $item) {
        echo '<div class="game-item">';
        echo '<h2>' . htmlspecialchars($item['nome']) . '</h2>';
        echo '<img src="' . htmlspecialchars($item['imagem']) . '" alt="' . htmlspecialchars($item['nome']) . '">';
        echo '<p>' . htmlspecialchars($item['descricao']) . '</p>';
        echo '<a href="itens.json" target="_blank">Ver no JSON</a>';
        echo '</div>';
    }
    ?>
</div>