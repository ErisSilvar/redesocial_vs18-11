<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.html') ?>
    </header>
    <main>
        <h1>Lista de Pessoas</h1>
        <?php
        require_once 'class/rb.php';
        include('inc/conexaobd.inc.php');


        $pessoas = R::findAll('pessoa');

        if ($pessoas) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th>Gosta de Cães</th>";
            echo "<th>Gosta de Gatos</th>";
            echo "<th>Imagem</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            foreach ($pessoas as $pessoa) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($pessoa->id) . "</td>";
                echo "<td>" . htmlspecialchars($pessoa->nome) . "</td>";
                echo "<td>" . htmlspecialchars($pessoa->data_nascimento) . "</td>";
                echo "<td>" . ($pessoa->gosta_cao ? "Sim" : "Não") . "</td>";
                echo "<td>" . ($pessoa->gosta_gato ? "Sim" : "Não") . "</td>";
                echo "<td><img src='imgs/" . htmlspecialchars($pessoa->imagem) . "' alt='Imagem' width='100'></td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo '<p style="color:red;">Nenhuma pessoa encontrada.</p>';
        }

        R::close();
        ?>
    </main>
    <footer>
        <?php include('inc/rodape.inc.html') ?>
    </footer>
</body>

</html>