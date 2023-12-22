<?php
    if(isset($_POST['delete_livro']))
    {
        session_start();
        require '../../service/conexao.php';

        $id = $_POST['delete_livro'];

        $produto_id = mysqli_real_escape_string($conn, $id);

        $query = "DELETE FROM Livro WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['m'] = "Produto Deletado!";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $_SESSION['m'] = "Produto não deletado!";
            header("Location: index.php");
            exit(0);
        }
    }
?>