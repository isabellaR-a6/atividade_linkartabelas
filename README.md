Atividade – Integração de PHP com MySQL (Juntar Tabelas)
-----------
 Descrição da Atividade
---
Este projeto tem como objetivo praticar o uso do PHP com MySQL Workbench, realizando operações de criação, inserção e leitura de dados em tabelas de um banco de dados.

A atividade consiste em criar uma aplicação simples de cadastro e listagem de livros, onde os dados são salvos e exibidos dinamicamente a partir do banco de dados MySQL.
Além disso, o projeto prepara o ambiente para realizar junções (JOINs) entre tabelas no futuro — por exemplo, relacionar livros com autores ou editoras.

Imagem da tela inicial
---
<img width="1917" height="820" alt="image" src="https://github.com/user-attachments/assets/6dcc90c9-ca28-40cb-a662-c79e908ea242" />


 Tecnologias Utilizadas
---
 PHP 8+

 MySQL / MySQL Workbench

 Apache (XAMPP ou WAMP)

 Bootstrap 5 (para estilização da tabela)

 Funcionalidades
 ---

✅ Conexão com o banco de dados
O PHP conecta-se ao servidor MySQL usando mysqli.

✅ Criação automática da tabela
Caso a tabela livros não exista, o PHP cria automaticamente com os campos id, titulo e autor.

✅ Formulário de inserção
Usuário insere o título e o autor de um livro por meio de um formulário HTML.

✅ Inserção de dados
Os dados são enviados via método POST e armazenados no banco.

✅ Listagem dinâmica
Os livros cadastrados são listados em uma tabela estilizada com Bootstrap, puxando os dados diretamente do banco MySQL.

✅ Contagem total de livros
Mostra o total de registros inseridos na tabela.

 Estilização
----

A tabela usa o framework Bootstrap 5, garantindo:

Layout responsivo

Cores e bordas automáticas

Versão compacta (.table-sm) para melhor visualização
