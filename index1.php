<?php
include 'conexao.php';

//verifica se o formulario foi enviado via metodo post
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
//Receber os valores enviados do formulario post no campo nome e idade 
$Nome =$_POST["Nome"];
$Idade =$_POST["Idade"];
//montar uma consulta Sql para inserir valores no banco 
$sql = "INSERT INTO pessoas (Nome,Idade) VALUES('$Nome', $Idade)";
//executar a consulta banco de dados
$result  = $conn->query($sql);

echo "Dados inseridos com sucesso!! <br> <br>";
echo "Nome digitado: ". htmlspecialchars($Nome)."<br>"."<br>";
    echo "Idade digitada: ". htmlspecialchars($Idade)."<br>"."<br>";

}else{
    echo "Dados inválidos, verifique os campos";
}

$sql = "SELECT nome, idade from pessoas";


$result  = $conn->query($sql);

$row = $result ->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmulario</title>
</head>
<body>
    <form method="POST">

    Nome: <input type="text" name="Nome"b> 
    <br>
    Idade: <input type="number" name="Idade">
     <br>
    <input type="submit" value="Adicionar">
    
    </form>
</body>
</html>