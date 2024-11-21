<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de postagem</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html') ?>
    </header>
    <main>
        <h2>Cadastro de postagem</h2>
        <br><br>
        <form action="cadastrarpostagem.php" method="get">
            <fieldset>
                <legend>Dados da postagem</legend>
                <label for="descricao">Descrição</label><br>
                <input id="descricao" type="text" name="descricao">
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

        <form action="recuperarpostagem.php" method="get">
            <fieldset>
                <legend>Mostrar dados da postagem</legend>
                <label for="mostrar" name="mostrar">Mostrar</label><br>
                <input id="codigo" type="number" name="codigo">
                <input type="submit" value="Mostrar">
            </fieldset>
        </form>

        <form action="recuperartodaspostagem.php" method="get">
            <fieldset>
                <input type="submit" value="Mostrar todas as postagem">
            </fieldset>
        </form>
    </main>
    <footer>
        <?php include('inc/rodape.inc.html') ?>
    </footer>
</body>

</html>