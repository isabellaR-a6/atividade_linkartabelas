<?php
$servername = "localhost";


$username = "root";


$password = "Senai@118";

 $dbname = "test_formulario";


 $conn = new mysqli ($servername, $username, $password, $dbname);

 //1- criar uma tabela "carros"
    $sql = "CREATE TABLE IF NOT EXISTS carros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(255),
    ano int
    )";
    $conn->query($sql);

    //2- formulario para inserir modelo e ano

    if($_SERVER["REQUEST_METHOD"] != "POST"){
         echo '
         <form method="POST">
         Modelo: <input type="text" name="modelo"b> 
         <br>
         Ano: <input type="number" name="ano">
         <br>
         <input type="submit" value="Adicionar">
    
         ';
    }

    //3- recebe os dados via post e insere dados

 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];

    if($modelo == "" || $ano == " "|| $ano <=0){
        echo"Preencha os campos corretamentes. <br>";

    }else{
        $sqlinsert = "INSERT INTO carros (modelo, ano) VALUES ('$modelo', '$ano')";
        if($conn->query($sqlinsert) === TRUE){
            echo "Carro inserido com sucesso! <br>";
        
            //4- Mostrar ultimo registro inserido
            $ultimo_id = $conn->insert_id;
            $sqlSelect = "SELECT * FROM carros where id= $ultimo_id";
            $resultado = $conn->query($sqlSelect);
            //
            $carro = $resultado-> fetch_assoc();
            echo"ID: ". $carro['id']. "Modelo: " .$carro['modelo']. "Ano: ". $carro['ano']. "<br>";
        }else{
            echo"Erro ao inserir" . $conn->error. "<br>";
        }
    }
 }

//Listar todos os carros em tabela

echo "<h3> Carros Cadastrados</h3>";
$sqlAll = "SELECT * FROM carros";
//mostra o resultado da select 
$result = $conn->query ($sqlAll);

if($result->num_rows >0){
    echo "<table border= '1'>
    <tr>
    <th>ID</th>
    <th>Modelo</th>
    <th>Ano</th>
    <tr>";

    while ($row = $result->fetch_assoc()){
        echo"
        <tr>
           <td>" .$row["id"]."</td>
           <td>" .$row["modelo"]."</td>
           <td>" .$row["ano"]."</td>
           </tr>";

    }
    echo"</table>";
    
}else{
    echo "Nnehum carro cadastrado. <br>";
}

//Mostrar carros ordenados pelo ano

echo"<h3> Carros Ordenados pelo ano</h3>";
$sqlOrder = "SELECT*FROM carros ORDER BY ano";
$resultOrder = $conn->query($sqlOrder);
    if($resultOrder->num_rows >0){
    echo "<table border= '1'>
    <tr>
    <th>ID</th>
    <th>Modelo</th>
    <th>Ano</th>
    <tr>";

    while ($row = $resultOrder->fetch_assoc()){
        echo"
        <tr>
           <td>" .$row["id"]."</td>
           <td>" .$row["modelo"]."</td>
           <td>" .$row["ano"]."</td>
           </tr>";

    }
    echo"</table>";
    }

    // 14. Contar carros cadastrados
    $sqlCount = "SELECT COUNT(*) AS total FROM Carros";
    $resCount = $conn->query($sqlCount);
    $linhaCount = $resCount->fetch_assoc();
    echo "<br>Total de carros: " . $linhaCount['total'] . "<br>";
    // 17. Fechar conexão
    $conn->close();

 ?>
