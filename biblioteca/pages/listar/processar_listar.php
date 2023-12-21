<?php
    function listar() {
        require_once('../../service/conexao.php');

        $stmt = $conn->prepare("SELECT * FROM Livro");

        $stmt->execute();

        $stmt->bind_result($id, $titulo, $autor, $ano);

        while ($stmt->fetch()) {
            echo ' 
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
                </div>';
        }

        $stmt->close();
        $conn->close();
    }

    listar()
?>