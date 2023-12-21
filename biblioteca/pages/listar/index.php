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

        <?php require 'processar_listar.php'; ?>

        <div class="btnCad">
            <a class="btn btn-primary" href="../cadastrar/index.php" role="button">Cadastrar novo livro</a>
        </div>
    </div>
    </body>
</html>