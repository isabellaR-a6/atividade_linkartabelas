<?php
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "livros";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// 1 - Criar tabela livros (caso não exista)
$sql = "CREATE TABLE IF NOT EXISTS livros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    autor VARCHAR(255),
    titulo VARCHAR(255)
)";
$conn->query($sql);

// 2 - Formulário simples (mantido igual ao seu)
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo '
    <form method="POST">
        Título: <input type="text" name="titulo"><br>
        Autor: <input type="text" name="autor"><br>
        <input type="submit" value="Adicionar">
    </form>
    ';
}

// 3 - Recebe os dados via POST e insere no banco
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];

    if (empty($titulo) || empty($autor)) {
        echo "Preencha os campos corretamente. <br>";
    } else {
        $sqlinsert = "INSERT INTO livros (titulo, autor) VALUES ('$titulo', '$autor')";
        if ($conn->query($sqlinsert) === TRUE) {
            echo "Livro inserido com sucesso! <br>";
        } else {
            echo "Erro ao inserir: " . $conn->error . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <!-- Importando o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<h3 class="text-center mb-4">Livros Cadastrados</h3>

<div class="container">
    <table class="table table-striped table-bordered align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 4 - Buscar e exibir dados do banco
            $sqlAll = "SELECT * FROM livros ORDER BY id DESC";
            $result = $conn->query($sqlAll);

            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <th scope='row'>{$i}</th>
                        <td>{$row['titulo']}</td>
                        <td>{$row['autor']}</td>
                    </tr>";
                    $i++;
                }
            } else {
                echo "<tr><td colspan='3' class='text-muted'>Nenhum livro cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// 5 - Contar total de livros
$sqlCount = "SELECT COUNT(*) AS total FROM livros";
$resCount = $conn->query($sqlCount);
$linhaCount = $resCount->fetch_assoc();
echo "<p class='text-center fw-bold'>Total de Livros: " . $linhaCount['total'] . "</p>";

// Fechar conexão
$conn->close();
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
