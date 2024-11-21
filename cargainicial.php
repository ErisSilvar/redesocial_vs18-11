<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html'); ?>
    </header>
    <main>
        <?php

        require_once 'class/rb.php';
        include('inc/conexaobd.inc.php');

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
            $dataNascimento = filter_input(INPUT_GET, 'data', FILTER_SANITIZE_STRING);
            $gostaCao = isset($_GET['gostaCao']) ? 1 : 0;
            $gostaGato = isset($_GET['gostaGato']) ? 1 : 0;
            $imagem = filter_input(INPUT_GET, 'imagem', FILTER_SANITIZE_STRING);


            if (empty($nome) || empty($dataNascimento) || empty($imagem)) {
                echo '<p style="color:red;">Por favor, preencha todos os campos obrigatórios.</p>';
                exit;
            }

            $dataNascimentoFormatada = date("Y-m-d H:i:s", strtotime($dataNascimento));

            try {

                $pessoa = R::dispense('pessoa');
                $pessoa->nome = $nome;
                $pessoa->data_nascimento = $dataNascimentoFormatada;
                $pessoa->gosta_cao = $gostaCao;
                $pessoa->gosta_gato = $gostaGato;
                $pessoa->imagem = $imagem;


                $id = R::store($pessoa);

                echo "<p style='color:green;'>Pessoa cadastrada com sucesso! ID: $id</p>";
            } catch (Exception $e) {
                echo "<p style='color:red;'>Erro ao cadastrar pessoa: " . $e->getMessage() . "</p>";
            }
        } else {
            echo '<p style="color:red;">Método inválido. Utilize o formulário para enviar os dados.</p>';
        }


        R::close();
        ?>
    </main>
    <footer>
        <?php include('inc/rodape.inc.html'); ?>
    </footer>
</body>

</html>