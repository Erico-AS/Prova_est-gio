<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <title>Listagem</title>
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <strong>Título</strong>
            </div>
            <div class="col">
                <strong>Autor</strong>
            </div>
            <div class="col">
                <strong>Ano de publicação</strong>
            </div>
        </div>
    </div>

    <?php 
        require_once('../../service/conexao.php');

        $stmt = $conn->prepare("SELECT * FROM Livro");

        $stmt->execute();

        $stmt->bind_result($id, $titulo, $autor, $ano);

        while ($stmt->fetch()) {
            echo '
            <div class="container"> 
                <div class="row">
                    <div class="col">' .
                        $titulo .
                    '</div>
                    <div class="col">' .
                        $autor .
                    '</div>
                    <div class="col">' .
                        $ano .
                    '</div>
                    <div class="col">
                        <form action="processar_listar.php" method="POST" class="d-inline">
                            <button type="submit" name="delete_livro" value="'.$id.'"class="btn-close" data-bs-dismiss="alert" aria-label="Close"><strong style="color:red;">Deletar</strong></button>  
                        </form>
                    <div>
                </div>
            </div>';
        }

        $stmt->close();
        $conn->close();
    ?>

        <div class="btnCad">
            <a class="btn btn-primary" href="../cadastrar/index.php" role="button">Cadastrar novo livro</a>
        </div>

        <?php include('../cadastrar/mensagem.php') ?>
    </body>
</html>