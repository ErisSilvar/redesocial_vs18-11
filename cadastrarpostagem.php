<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html'); ?>
    </header>

    <main>
        <h1>RedBeanPHP</h1>

        <?php
        if (isset($_GET['descricao'])) {
            $descricao = $_GET['descricao'];

            require_once 'class/rb.php';

            include('inc/conexaobd.inc.php');

            $p = R::dispense('postagem');

            $p->descricao = $descricao;
            date_default_timezone_set('America/Fortaleza');
            $p->dataHora = date("Y-m-d H:i:s");
            $p->curtidas = 99;
            $p->ativo = TRUE;

            $id = R::store($p);

            R::close();

        } else {
            echo '<p style="color:red;">Dados inválidos para cadastro da postagem.</p>';
        }

        ?>
    </main>

    <footer>
        <?php include('inc/rodape.inc.html'); ?>
    </footer>
</body>

</html>