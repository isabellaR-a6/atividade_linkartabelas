Atividade – Integração de PHP com MySQL (CRUD DE LIVROS)
-----------
 Descrição da Atividade
---
Este projeto tem como objetivo praticar o uso do PHP com MySQL Workbench, realizando operações de criação, inserção, leitura, atualização e exclusão de dados em tabelas de um banco de dados.

A atividade consiste em criar uma aplicação simples de cadastro e listagem de livros, onde os dados são salvos e exibidos dinamicamente a partir do banco de dados MySQL. Além disso, o projeto prepara o ambiente para realizar junções (JOINs) entre tabelas no futuro — por exemplo, relacionar livros com autores ou editoras.

Imagem do projeto 
-
<img width="1898" height="862" alt="image" src="https://github.com/user-attachments/assets/5e1a48c9-db4c-48d1-b40f-a556727efc81" />


Tecnologias Utilizadas
---
<p align="center"> <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" /> <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" /> <img src="https://img.shields.io/badge/Apache-FC6A0B?style=for-the-badge&logo=apache&logoColor=white" /> <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" /> <img src="https://img.shields.io/badge/FontAwesome-528DD2?style=for-the-badge&logo=font-awesome&logoColor=white" /> </p>

 Funcionalidades
-
✅ Conexão com o banco de dados

O PHP conecta-se ao servidor MySQL usando mysqli.

✅ Criação automática da tabela

Caso a tabela livros não exista, o PHP cria automaticamente com os campos id, titulo e autor.

✅ Formulário de inserção

O usuário insere o título e o autor de um livro por meio de um formulário HTML.

✅ Inserção de dados

Os dados são enviados via método POST e armazenados no banco.

✅ Listagem dinâmica

Os livros cadastrados são listados em uma tabela estilizada com Bootstrap, puxando os dados diretamente do banco MySQL.

✅ Contagem total de livros

Exibe o total de registros inseridos na tabela.

 Operações CRUD
-
O sistema implementa todas as operações CRUD:

Operação	Significado	Exemplo no Projeto
C	Create (Criar)	Cadastro de livros via formulário
R	Read (Ler)	Lista de livros na tabela
U	Update (Atualizar)	Botão Editar e formulário
D	Delete (Excluir)	Botão Excluir
✏️ Editar um Livro

Botão no sistema:

<a href='update.php?id=1' class='btn btn-sm btn-primary'>
    <i class='fa-solid fa-pencil'></i> Editar
</a>


Fluxo visual:
-
Clique em Editar → formulário pré-preenchido abre.

Altere Título e Autor.

Clique em Atualizar → tabela é atualizada automaticamente.

imagem Exemplo
--
<img width="1919" height="786" alt="image" src="https://github.com/user-attachments/assets/59f70d61-c24f-4040-884e-137376c52214" />



 Excluir um Livro
-
Botão no sistema:

<a href='delete.php?id=1' class='btn btn-sm btn-danger'>
    <i class='fa-solid fa-trash'></i> Excluir
</a>


Fluxo visual:
-
Clique em Excluir → livro é removido.

A tabela é atualizada automaticamente.

 Dica: Adicione confirmação antes de excluir registros importantes.

 Botões e Ícones
-
Ação	Botão Bootstrap	Ícone Font Awesome
Editar	Azul (btn-primary)	✏️ (fa-pencil)
Excluir	Vermelho (btn-danger)	🗑️ (fa-trash)

 Exemplo de Lista de Livros
-
#	Título	Autor	Ações
1	O Pequeno Príncipe	Antoine de Saint-Exupéry	✏️ Editar
2	Dom Casmurro	Machado de Assis	✏️ Editar
3	Harry Potter	J.K. Rowling	✏️ Editar

No projeto real, os botões possuem cores Bootstrap e ícones Font Awesome.

 Guia de Interação
-
Acesse a página principal (atividade.php) para visualizar todos os livros.

Para cadastrar, use o formulário de Create.

Para editar, clique no botão azul ✏️.

Para excluir, clique no botão vermelho 🗑️.

Todas as alterações são refletidas automaticamente na tabela.

 Estilização
-

A tabela usa o framework Bootstrap 5, garantindo:

Layout responsivo

Cores e bordas automáticas

Versão compacta (.table-sm) para melhor visualização
