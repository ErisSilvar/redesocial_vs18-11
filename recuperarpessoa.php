<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dados da pessoa</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html') ?>
    </header>
    <main>
        <h1>Detalhes da Pessoa</h1>
        <?php
        if (isset($_GET['codigo'])) {
            date_default_timezone_set('America/Fortaleza');
            require_once 'class/rb.php';

            include('inc/conexaobd.inc.php');


            $pessoa = R::load('pessoa', $_GET['codigo']);

            if ($pessoa->id) {

                echo "<h2>Informações da Pessoa:</h2>";
                echo "<p><strong>ID:</strong> " . htmlspecialchars($pessoa->id) . "</p>";
                echo "<p><strong>Nome:</strong> " . htmlspecialchars($pessoa->nome) . "</p>";
                echo "<p><strong>Data de Nascimento:</strong> " . htmlspecialchars($pessoa->data_nascimento) . "</p>";
                echo "<p><strong>Gosta de Cães:</strong> " . ($pessoa->gosta_cao ? "Sim" : "Não") . "</p>";
                echo "<p><strong>Gosta de Gatos:</strong> " . ($pessoa->gosta_gato ? "Sim" : "Não") . "</p>";
                echo "<p><strong>Imagem:</strong></p>";
                echo "<img src='imgs/" . htmlspecialchars($pessoa->imagem) . "' alt='Imagem da pessoa' width='150'>";
            } else {
                echo '<p style="color:red;">Pessoa não encontrada.</p>';
            }

            R::close();
        } else {
            echo '<p style="color:red;">Código da pessoa não fornecido.</p>';
        }
        ?>
    </main>
    <footer>
        <?php include('inc/rodape.inc.html') ?>
    </footer>
</body>

</html>