## Atividade – Integração de PHP com MySQL (CRUD de Livros)
---

##  Descrição da Atividade

Este projeto tem como objetivo **praticar PHP com MySQL**, criando uma aplicação simples para cadastro, listagem, edição e exclusão de livros.  
Os dados são salvos e exibidos dinamicamente do banco MySQL, e o projeto prepara o ambiente para futuras **junções entre tabelas** (ex: livros ↔ autores ou editoras).

---

 💻 Tecnologias Utilizadas

| Tecnologia | Badge |
|------------|-------|
| PHP        | ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) |
| MySQL      | ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) |
| Apache     | ![Apache](https://img.shields.io/badge/Apache-FC6A0B?style=for-the-badge&logo=apache&logoColor=white) |
| Bootstrap  | ![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white) |
| FontAwesome| ![FontAwesome](https://img.shields.io/badge/FontAwesome-528DD2?style=for-the-badge&logo=font-awesome&logoColor=white) |

---
## imagem do projeto
<img width="1919" height="865" alt="image" src="https://github.com/user-attachments/assets/6c11ab35-f059-4c62-a215-ecb505bb6f88" />

---

##  Funcionalidades do Sistema

| Funcionalidade | Descrição |
|----------------|-----------|
|  Conexão BD  | Conecta ao MySQL via **mysqli** |
|  Criar Livro | Formulário para adicionar título e autor |
|  Listar Livros | Exibe livros em tabela Bootstrap responsiva |
|  Editar Livro | Altera título e autor de um livro existente |
|  Excluir Livro | Remove livro do banco de dados |
|  Contagem | Mostra total de registros cadastrados |

---

##  Operações CRUD

| Operação | Significado | Exemplo no Sistema |
|----------|------------|-----------------|
| **C** | Create (Criar) | Cadastro de livros |
| **R** | Read (Ler)   | Listagem de livros |
| **U** | Update (Atualizar) | Botão ✏️ Editar |
| **D** | Delete (Excluir) | Botão 🗑️ Excluir |

---

## ✏️ Editar Livro

**Botão no sistema:**
✏️ Editar (btn-primary)


**Como funciona:**  
1️⃣ Clique em **Editar** → formulário pré-preenchido abre  
2️⃣ Altere Título e Autor  
3️⃣ Clique em **Atualizar** → tabela atualiza automaticamente

---
## Imagem de exemplo
<img width="1919" height="859" alt="image" src="https://github.com/user-attachments/assets/4a1c6034-1438-4b38-9910-60c605302843" />


## 🗑️ Excluir Livro

**Botão no sistema:**

🗑️ Excluir (btn-danger)


**Como funciona:**  
1️⃣ Clique em **Excluir** → livro é removido  
2️⃣ Tabela atualiza automaticamente  

> ⚠️ Dica: adicionar confirmação antes de excluir registros importantes.

---

## 🎨 Botões e Ícones

| Ação    | Botão | Ícone |
|---------|-------|-------|
| ✏️ Editar | Azul (`btn-primary`) | ✏️ |
| 🗑️ Excluir | Vermelho (`btn-danger`) | 🗑️ |

---

##  Exemplo de Lista de Livros

| # | Título                | Autor                     | Ações                  |
|---|----------------------|--------------------------|-----------------------|
| 1 | O Pequeno Príncipe    | Antoine de Saint-Exupéry | ✏️ Editar 🗑️ Excluir |
| 2 | Dom Casmurro          | Machado de Assis         | ✏️ Editar 🗑️ Excluir |
| 3 | Harry Potter          | J.K. Rowling             | ✏️ Editar 🗑️ Excluir |

---

##  Guia de Interação

1. Acesse `atividade.php` para ver todos os livros  
2. Para **cadastrar**, use o formulário Create  
3. Para **editar**, clique no botão azul ✏️  
4. Para **excluir**, clique no botão vermelho 🗑️  
5. Todas as alterações refletem automaticamente na tabela

---

##  Estilização

- Layout responsivo com **Bootstrap 5**  
- Bordas e cores automáticas  
- Tabela compacta `.table-sm`  

---

##  Agradecimentos e Créditos

Este projeto foi totalmente desenvolvido individualmente. 
Foi uma ótima oportunidade de colocar em prática PHP e MySQL, criar funcionalidades CRUD e experimentar o design de interfaces responsivas. Cada linha de código representa aprendizado e dedicação!

Obrigada por acessar meu git❤️ 
