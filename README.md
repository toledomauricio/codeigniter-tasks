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

## Docker Compose

O projeto utiliza Docker Compose para conteinerização. Você pode executar o seguinte comando para iniciar o projeto:

```bash
docker-compose up -d
```

## Guia de Configuração do Projeto com Composer

Este guia o ajudará a configurar o ambiente de desenvolvimento para o projeto utilizando o Composer após iniciar o ambiente Docker. Siga os passos abaixo:

## Acessando o Bash no Docker

Primeiro, você precisa acessar o ambiente Docker executando o seguinte comando no seu terminal:

```bash
docker exec -it tasksapi_web_1 bash
```

Este comando abrirá um terminal interativo dentro do contêiner Docker, onde você poderá executar os comandos necessários para configurar o projeto.

## Instalando Dependências com o Composer
Dentro do terminal interativo do Docker, execute o seguinte comando para instalar as dependências do Codeigniter4 e outras dependências do projeto:

```bash
composer install
```

O Composer irá baixar e instalar todas as bibliotecas e pacotes especificados no arquivo composer.json, garantindo que todas as dependências necessárias estejam prontas para uso.

## API Docs
A API Docs possui todas informações necessária que você precisa para efetuar suas requisições no projeto
- [Documentação da API](https://github.com/toledomauricio/codeigniter-tasks/blob/master/documentation/api-documentation.md)

---

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.✨

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).

---

Este é um projeto fictício de exemplo para demonstrar a estrutura de um projeto CodeIgniter 4 com testes automatizados e uso do Docker. Certifique-se de personalizar e adaptar o projeto de acordo com suas necessidades específicas.
