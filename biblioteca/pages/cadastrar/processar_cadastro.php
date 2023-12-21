<?php
    session_start();
    require '../../service/conexao.php';

    if(isset($_POST['cadastrar_livro']))
    {
        $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
        $autor = mysqli_real_escape_string($conn, $_POST['autor']);
        $ano = intval($_POST['ano']);

        if($ano != 0 && strlen($ano) == 4) {
    
            $stmt = $conn->prepare("INSERT INTO Livro (titulo, autor, ano_publicacao) VALUES (?, ?, ?)");

            $stmt->bind_param("ssi", $titulo, $autor, $ano);
            
            $query_run = $stmt->execute();

            if($query_run)
            {
                header("Location: ../listar");
                exit(0);
            }
            else
            {
                $_SESSION['m'] = "Livro não cadastrado";
                header("Location: index.php");
                exit(0);
            }
        } 
        else {
            $_SESSION['m'] = "Campo 'ano' preenchido de maneira errada";
            header("Location: index.php");
            exit(0);
        }
    }
?>