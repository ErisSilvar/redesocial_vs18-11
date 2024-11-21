<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar todas as postagens</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html') ?>
    </header>
    <main>
        <h1>Postagens</h1>
        <?php
        date_default_timezone_set('America/Fortaleza');
        date("Y-m-d H:i:s");

        require_once 'class/rb.php';


        include('inc/conexaobd.inc.php');


        $postagens = R::findAll('postagem');

        if ($postagens) {
            echo "<ul>";
            foreach ($postagens as $p) {
                echo "<li>";
                echo "<strong>ID:</strong> " . htmlspecialchars($p->id) . "<br>";
                echo "<strong>Descrição:</strong> " . htmlspecialchars($p->descricao) . "<br>";
                echo "<strong>Data:</strong> " . htmlspecialchars($p->data) . "<br>";
                echo "</li><br>";
            }
            echo "</ul>";
        } else {
            echo '<p style="color:red;">Nenhuma postagem encontrada.</p>';
        }


        R::close();
        ?>
    </main>
    <footer>
        <?php include('inc/rodape.inc.html') ?>
    </footer>
</body>

</html>