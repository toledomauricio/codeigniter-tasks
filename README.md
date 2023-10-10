# CodeIgniter Tasks API

**CodeIgniter Tasks** é uma API simples de gerenciamento de tarefas construída com o framework CodeIgniter 4. Esta API permite listar tarefas, obter detalhes de uma tarefa específica, criar novas tarefas, atualizar tarefas existentes e excluir tarefas. ✨

## Funcionalidades

- [x] Listar todas as tarefas.
- [x] Obter os detalhes de uma tarefa específica.
- [x] Criar uma nova tarefa.
- [x] Atualizar uma tarefa existente.
- [x] Excluir uma tarefa.

## Recursos

- Utilização de Docker para conteinerização do projeto.
- Documentação clara e concisa do código.

## Estrutura do Projeto

├── app/
│ ├── Controllers/
│ │ ├── TasksApiController.php
│ │ └── ...
│ ├── Models/
│ │ ├── TaskModel.php
│ │ └── ...
│ ├── Services/
│ │ ├── TasksService.php
│ │ └── ...
│ ├── ...
│ └── ...
├── docker/
│ ├── apache/
│ │ └── Dockerfile
│ │ └── 000-default.conf
│ ├── mysql/
│ │ └── Dockerfile
│ ├── codeigniter_database.sql
│ ├── Dockerfile
│ └── ...

## Docker Compose

O projeto utiliza Docker Compose para conteinerização. Você pode executar o seguinte comando para iniciar o projeto:

```bash
docker-compose up -d
```

Acesse a API em [http://localhost/api/tasks](http://localhost/api/tasks).

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.✨

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).

---

Este é um projeto fictício de exemplo para demonstrar a estrutura de um projeto CodeIgniter 4 com testes automatizados e uso do Docker. Certifique-se de personalizar e adaptar o projeto de acordo com suas necessidades específicas.
