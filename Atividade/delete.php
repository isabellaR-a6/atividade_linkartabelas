<?php
include 'conexao.php'; 

if(isset($_GET['id'])) { //Verifica se o id foi passado
    $id = $_GET['id']; //recebe o id
    $sql = "DELETE FROM livros WHERE id=$id"; //Prepara a exclusão

    if($conn->query($sql) === TRUE){
        header("Location: atividade.php"); 
        exit;
    }else{
        echo "Erro: " . $conn->error; //Mostra erro, se houver
    }
}


?>