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

## Rodando as Migrations com Spark
Após instalar as dependências do Composer e você está usando o container do projeto, não será necessário configurar configurar o Database.php, do contrário, você já sabe o que fazer.

Agora, rode as migratios:
```bash
    php spark migrate
```

## Acessando o projeto
O projeto estará disponível em http://localhost se você não possuir nenhum serviço viculado a porta 80, caso possua, finalize o serviço antes de rodar o container.

## API Docs
A API Docs possui todas informações necessária que você precisa para efetuar suas requisições no projeto
- [Documentação da API](https://github.com/toledomauricio/codeigniter-tasks/blob/master/documentation/api-documentation.md)

## Cobertura de Testes da API 🧪

Para garantir a qualidade e confiabilidade do código, foram criados alguns testes. Abaixo estão os principais testes de integração da API:

### Teste `testIndex()`

- **Descrição:** Este teste verifica se a rota de listagem de tarefas (GET) retorna o status HTTP 200, indicando sucesso.
- **Método:** `testIndex()`

### Teste `testCreate()`

- **Descrição:** Este teste verifica a criação de uma nova tarefa (POST) com dados aleatórios. Ele verifica se a resposta inclui o status HTTP 201 (Created) e se os dados retornados correspondem aos dados enviados.
- **Método:** `testCreate()`

### Teste `testUpdate()`

- **Descrição:** Este teste verifica a atualização de uma tarefa existente (PUT). Primeiro, ele cria uma tarefa, e depois, atualiza seus dados. Ele verifica se o status HTTP 200 é retornado e se os dados atualizados correspondem aos dados enviados.
- **Método:** `testUpdate()`

### Teste `testDelete()`

- **Descrição:** Este teste verifica a exclusão de uma tarefa (DELETE). Ele cria uma tarefa, a exclui e, em seguida, verifica se a tarefa foi removida com sucesso, retornando o status HTTP 204 (No Content).
- **Método:** `testDelete()`

## Executando os Testes

Para executar os testes, você pode usar o seguinte comando dentro do container:

```bash
composer exec phpunit
```

Certifique-se de estar no ambiente Docker e dentro do diretório do seu projeto.

## Cobertura de Testes
![Cobertura de Testes](https://github.com/toledomauricio/codeigniter-tasks/blob/master/documentation/testCoverage.png?raw=true)
---

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.✨

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).

---

Este é um projeto fictício de exemplo para demonstrar a estrutura de um projeto CodeIgniter 4 com testes automatizados e uso do Docker. Certifique-se de personalizar e adaptar o projeto de acordo com suas necessidades específicas.
