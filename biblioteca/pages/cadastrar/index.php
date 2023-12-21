<?php 
    session_start();
?>
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

        <form action="processar_cadastro.php" method="POST">

            <div class="mb-3">
                <label>Titulo</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Autor</label>
                <input type="text" name="autor" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Ano de publicação</label>
                <input type="number" name="ano" class="form-control" 
                pattern="\d{4}" title="Informe exatamente 4 caracteres numéricos."
                required>
            </div>

            <div class="mb-3">
                <button type="submit" name="cadastrar_livro" class="btn btn-success">Cadastrar Livro</button>
                <a class="btn btn-primary" href="../listar/index.php" role="button">Ver listagem</a>
            </div>

        </form>
        
        <?php include('mensagem.php') ?>

    </div>
    </body>
</html>