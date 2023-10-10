# Documentação da API

Esta API permite gerenciar tarefas, como criar, listar, atualizar e excluir tarefas. Seguem endpoints:

### Listar todas as tarefas

- **URL:** `/api/tasks`
- **Método HTTP:** GET
- **Descrição:** Retorna uma lista de todas as tarefas disponíveis.

### Exibir uma tarefa

- **URL:** `/api/tasks/{id}`
- **Método HTTP:** GET
- **Descrição:** Retorna detalhes de uma tarefa específica com base no ID fornecido.

### Criar uma nova tarefa

- **URL:** `/api/tasks`
- **Método HTTP:** POST
- **Descrição:** Cria uma nova tarefa com os seguintes campos:
  - `title` (obrigatório): O título da tarefa.
  - `description`: A descrição da tarefa.
  - `status` (opcional): O status da tarefa (possíveis valores: "done," "canceled," "pending"; padrão: "pending").

### Atualizar uma tarefa

- **URL:** `/api/tasks/update/{id}`
- **Método HTTP:** PUT
- **Descrição:** Atualiza uma tarefa existente com base no ID fornecido. Os campos atualizáveis são:
  - `title`: O título da tarefa.
  - `description`: A descrição da tarefa.
  - `status` (opcional): O status da tarefa (possíveis valores: "done," "canceled," "pending").

### Excluir uma tarefa

- **URL:** `/api/tasks/delete/{id}`
- **Método HTTP:** DELETE
- **Descrição:** Exclui uma tarefa com base no ID fornecido.

## Exemplos de Requisições

Seguem exemplos de requisições:

### Listar todas as tarefas

```http
GET /api/tasks
```
### Exibir uma tarefa

```http
GET /api/tasks/1
```

### Criar uma nova tarefa

```http
POST /api/tasks
Content-Type: application/json

{
  "title": "Nova Tarefa",
  "description": "Descrição da nova tarefa",
  "status": "pending"
}
```

### Atualizar uma tarefa
```http
PUT /api/tasks/1
Content-Type: application/json

{
  "title": "Tarefa Atualizada",
  "description": "Descrição atualizada da tarefa",
  "status": "completed"
}
```

### Excluir uma tarefa
```http
DELETE /api/tasks/1
```