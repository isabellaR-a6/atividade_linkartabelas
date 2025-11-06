<?php
// Definir o endereço do servidor onde o mysql tá funcionando//
$servername = "localhost";

// nome do usuario do banco de dados sql//
$username = "root";

//Senha do usuario do banco de dados sql//
$password = "Senai@118";

//Nome do banco de dados que sera usado ne conexão
 $dbname = "teste_conex";


 //conn significa conexao
 $conn = new mysqli ($servername, $username, $password, $dbname);

//  if ($conn->connect_error){

//  echo "erro de conexão <br>" .$conn->connect_error; 
    

// }else {

//     echo "conectado corretamente";
// }


    

?>