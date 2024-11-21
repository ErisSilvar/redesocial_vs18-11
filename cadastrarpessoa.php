<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html') ?>
    </header>
    <main>
        <h2>Cadastro de pessoa</h2>
        <br><br>
        <form action="cargainicial.php" method="get">
            <fieldset>
                <legend>Dados da pessoa</legend>
                <label for="nome">Nome: </label><br>
                <input id="nome" type="text" name="nome"><br><br>
                <label for="idade">Data e horário do nascimento: </label><br>
                <input type="datetime-local" name="data" id="data"><br><br>
                <input type="checkbox" name="gostaCao" id="gostaCao">
                <label for="gostaCao">Gosto de cão</label><br><br>
                <input type="checkbox" name="gostaGato" id="gostaGato">
                <label for="gostaCao">Gosto de gato</label><br><br>
                <div>
                    <label for="imagem">Escolha sua foto de perfil:</label><br><br>

                    <label>
                        <input type="radio" name="imagem" value="imagem1.jpg" required>
                        <img src="imgs/imagem1.jpg" alt="Imagem 1" width="100"><br><br>
                    </label>
                    <label>
                        <input type="radio" name="imagem" value="imagem2.jpg">
                        <img src="imgs/imagem2.jpg" alt="Imagem 2" width="100"><br><br>
                    </label>
                    <label>
                        <input type="radio" name="imagem" value="imagem3.jpg">
                        <img src="imgs/imagem3.jpg" alt="Imagem 3" width="100"><br><br>
                    </label>
                    <label>
                        <input type="radio" name="imagem" value="imagem4.jpg">
                        <img src="imgs/imagem4.jpg" alt="Imagem 3" width="100"><br><br>
                    </label>
                </div>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

        <form action="recuperarpessoa.php" method="get">
            <fieldset>
                <legend>Mostrar dados da pessoa</legend>
                <label for="mostrar" name="mostrar">Mostrar</label><br>
                <input id="codigo" type="number" name="codigo">
                <input type="submit" value="Mostrar">
            </fieldset>
        </form>

        <form action="recuperartodaspessoas.php" method="get">
            <fieldset>
                <input type="submit" value="Mostrar dados de todas as pessoas">
            </fieldset>
        </form>
    </main>
    <footer>
        <?php include('inc/rodape.inc.html') ?>
    </footer>
</body>

</html>