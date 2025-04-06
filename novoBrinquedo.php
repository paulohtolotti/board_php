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
            <li><a href="itensMonopoly.php">Monopoly</a></li>
            <li><a href="xadrez.php">Xadrez</a></li>
            <li><a href="dama.php">Dama</a></li>
            <li><a href="#">Adicionar brinquedo</a></li>
            <li><a href="json_data/itens.json">Arquivo JSON</a></li>
        </nav>
    </header>
    <h1>Página interativa</h1>
    <div class="game-grid">
        <form action="#" method="post" id="toyForm">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem">
            <button type="submit">Enviar dados</button>
        </form>
   
    <?php
    IF($_SERVER["REQUEST_METHOD"] == "POST"){
        $toyName = htmlspecialchars($_POST["nome"]);
        $toyDesc = htmlspecialchars($_POST["descricao"]);
        $toyImg = htmlspecialchars($_POST["imagem"]);
        
        if($toyName && $toyDesc && $toyImg){
            $currentData= file_get_contents('./json_data/itens.json');
            $array_data = json_decode($currentData, true);

            $new_data = array(
                "nome" => $toyName,
                "descricao" => $toyDesc,
                "imagem" => $toyImg   
            );
            $array_data["novoBrinquedo"] = $new_data;
            $final_data = json_encode($array_data);

            if (file_put_contents("./json_data/itens.json", $final_data)){

                    $new_toy = $array_data["novoBrinquedo"];
                    echo '<div class="game-wrap">';
                    echo '<h2>' . htmlspecialchars($new_toy['nome']) . '</h2>';
                    echo '<p class="hero-text">' . htmlspecialchars($new_toy['descricao']) . '</p>';
                    echo '<img src="' . htmlspecialchars($new_toy['imagem']) . '" class="game-img"' . htmlspecialchars($new_toy['nome']) . '">';
                    echo '</div>';
            }
        }
    }
    ?>
     </div>
    <footer>
        <p class="site-footer">Desenvolvido por: Artur Lombardi - Luis Paulo Andrade Silva - Matheus Batista Gonçalves - Paulo Henrique Tolotti </p>

    </footer>
</body>

</html>