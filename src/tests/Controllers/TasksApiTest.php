<?php
// tests/Controllers/TasksApiTest.php

namespace Tests\Controllers;

use CodeIgniter\Test\FeatureTestCase;

class TasksApiTest extends FeatureTestCase
{
    public function testIndex()
    {
        // Realiza um teste para a rota de listagem (GET) de tarefas
        $result = $this->get('api/tasks');
        $result->assertStatus(200);
    }

    public function testCreate()
    {
        // Realiza um teste para a rota de criação (POST) de tarefas
        $data = [
            'title' => 'Tarefa de teste ' . rand(5, 15),
            'description' => 'Descrição de teste ' . rand(5, 15),
            'status' => 'pending',
        ];

        $json = json_encode($data);

        $result = $this->withHeaders(['Content-Type' => 'application/json'])
            ->withBody($json)
            ->post('/api/tasks');

        $result->assertStatus(201);
        $responseData = $result->getJson();
        $dataDecoded = json_decode($responseData);

        $this->assertSame($data['title'], $dataDecoded->title);
        $this->assertSame($data['description'], $dataDecoded->description);
        $this->assertSame($data['status'], $dataDecoded->status);
    }
}
