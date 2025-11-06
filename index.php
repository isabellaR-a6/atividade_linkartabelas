<?php
include 'conexao.php';

//Define uma consulta as colunas da tabela pessoas
$sql = "SELECT id, nome, idade from pessoas";

//execulta a consulta sql de cima 
//o query é o comando q a gnt fez em cima no $sql armazenando o resultado em $result
$result  = $conn->query($sql);

//organiza tudo do banco em linhas
$row = $result ->fetch_assoc();

// echo $row["nome"].$row["id"] .$row["idade"];
?>
<!-- ----------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar dados</title>
</head>
<body>
    <p>Nome: <?php echo htmlspecialchars( $row["nome"])  ?></p>
</body>
</html>