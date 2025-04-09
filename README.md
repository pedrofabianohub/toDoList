# ToDoList - Gerenciador de Tarefas

Bem-vindo ao **ToDoList**, um aplicativo Laravel para gerenciar tarefas do dia a dia. Este projeto foi desenvolvido para ajudar os usuários a criar, editar, visualizar e excluir tarefas, além de acompanhar o progresso diário.

---

## 📋 Funcionalidades

- **Criar Tarefas**: Adicione novas tarefas com título, descrição, data de entrega e status.
- **Editar Tarefas**: Atualize as informações de uma tarefa existente.
- **Excluir Tarefas**: Remova tarefas que não são mais necessárias.
- **Visualizar Progresso**: Acompanhe o progresso diário das tarefas. (Falta implementar)
- **Filtrar Tarefas**: Filtre tarefas por status (pendente, em andamento, concluída). (Falta implementar)

---

## 🛠️ Tecnologias Utilizadas

- **Laravel 12.x**: Framework PHP para desenvolvimento backend.
- **MySQL**: Banco de dados relacional para armazenar tarefas e usuários.

---

## 🚀 Configuração do Projeto

### Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas:

- **PHP 8.2+**
- **Composer**
- **MySQL**
- **Servidor local** (como XAMPP, Laragon ou Laravel Sail)

### Passo a Passo

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio

2. **Instale as dependências do PHP**:
   ```bash
   composer install

3. **Configure o arquivo .env: Copie o arquivo .env.example para .env**:
   ```bash
   cp .env.example .env

4. **Atualize as variáveis de ambiente no arquivo .env**:
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=projeto_todo
    DB_USERNAME=root
    DB_PASSWORD=sua_senha

5. **Gere a chave da aplicação**:
   ```bash 
    php artisan key:generate

6. **Execute as migrações e seeders: Crie as tabelas no banco de dados e insira dados iniciais**:
   ```bash
   php artisan migrate --seed

7. **Inicie o servidor de desenvolvimento**:
   ```bash
   php artisan serve

8. Acesse o projeto no navegador em **http://localhost:8000/**

📁 Estrutura de Diretórios:

🧠 app/Http/Controllers/
Controladores responsáveis pela lógica de negócio:

ApiController.php: Gerencia as operações CRUD para tarefas.

AuthController.php: Gerencia a autenticação de usuários.

🖼️ resources/views/
Templates Blade:

home.blade.php: Página inicial com a lista de tarefas.

createTask.blade.php: Formulário para criar nova tarefa.

edit.blade.php: Formulário para editar tarefa.

readById.blade.php: Detalhes de uma tarefa.

components/: Componentes reutilizáveis (botões, layouts).

🧭 routes/web.php
Define as rotas principais da aplicação.

🎨 public/assets/css/style.css
Arquivo principal de estilos CSS.

🗃️ database/migrations/
Scripts para criação das tabelas no banco de dados.

🌱 database/seeders/
Popular o banco com dados iniciais (fakes ou default).

Claro! Aqui está a seção formatada com **tabelas**, **emojis** e uma aparência bonita para seu README:

---

## 🔑 Rotas Principais

### 🗂️ **Tarefas**

| Método | Rota                  | Descrição                         |
|--------|------------------------|-----------------------------------|
| GET    | `/`                    | Página inicial (lista tarefas)   |
| GET    | `/api/create`          | Formulário para criar             |
| POST   | `/api/createPost`      | Salva uma nova tarefa             |
| GET    | `/api/update/{id}`     | Formulário para editar tarefa     |
| POST   | `/api/updatePost/{id}` | Atualiza uma tarefa existente     |
| GET    | `/api/delete/{id}`     | Exclui uma tarefa                 |

### 🔐 **Autenticação** (Falta implementar)

| Método | Rota         | Descrição          |
|--------|--------------|--------------------|
| GET    | `/login`     | Página de login    |
| GET    | `/register`  | Página de registro |

---

🖥️ Funcionalidades Detalhadas
1️⃣ Criar Tarefa
📍 Acesse /api/create para abrir o formulário de criação.
📝 Preencha os campos:

Título: Nome da tarefa

Descrição: Detalhes da tarefa

Data de Entrega: Escolha uma data e hora
✅ Clique em "Criar task" para salvar.

2️⃣ Editar Tarefa
✏️ Acesse /api/update/{id} para editar uma tarefa.
🔧 Atualize os campos desejados
💾 Clique em "Editar task" para salvar as alterações.

3️⃣ Excluir Tarefa
🗑️ Clique no botão "Deletar" na lista de tarefas para remover uma tarefa.

4️⃣ Filtrar Tarefas
🔍 Use o seletor na página inicial para filtrar tarefas por status (pendente, concluída, etc).



