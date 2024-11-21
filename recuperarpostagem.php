<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dados da postagem</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html') ?>
    </header>
    <main>
        <h1>Motrar postagem</h1>
        <?php

        if (isset($_GET['codigo'])) {
            date_default_timezone_set('America/Fortaleza');
            date("Y-m-d H:i:s");

            require_once 'class/rb.php';

            include('inc/conexaobd.inc.php');


            $p = R::load('postagem', $_GET['codigo']);


            if ($p->id) {
                echo "<p>Id: " . $p->id . "</p>";
                echo "<p>Descrição: " . htmlspecialchars($p->descricao) . "</p>";
            } else {
                echo '<p style="color:red;">Postagem não encontrada.</p>';
            }

            R::close();
        } else {
            echo '<p style="color:red;">Código não fornecido.</p>';
        }
        ?>


    </main>
    <footer>
        <?php include('inc/rodape.inc.html') ?>
    </footer>
</body>

</html>