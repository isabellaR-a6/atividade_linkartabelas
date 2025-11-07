<?php
include 'conexao.php';

if(isset($_GET['id'])){   
    $id = $_GET['id']; 
    $sql = "SELECT*FROM livros WHERE id=$id"; 
    $result = $conn->query($sql); //executa a consulta
    $livros = $result->fetch_assoc(); //Obtém os dados do usuario
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST['titulo']; 
    $autor = $_POST ['autor']; 
    $sql = "UPDATE livros SET titulo='$titulo', autor='$autor' WHERE id=$id"; 

    if($conn->query($sql) === TRUE){
        header("Location: atividade.php"); 
    }else{
        echo"Erro: " .$conn->error; 
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualização dos livros</title>
</head>
<body>
    <h1>Atualizar Livros</h1>
    <form action="" method="POST">
        <label>Título:</label>
        <input type="text" name="titulo" value="<?php echo $livros['titulo'];?>" required>
        <label>Autor:</label>
        <input type="text" name="autor" value="<?php echo $livros['autor']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>

    <a href="atividade.php">Cancelar</a> 
    <!-- link para voltar -->

</body>
</html>