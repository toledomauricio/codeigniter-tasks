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

    public function testUpdate()
    {
        $initialData = [
            'title' => 'Tarefa de teste inicial',
            'description' => 'Descrição de teste inicial',
            'status' => 'pending',
        ];

        $json = json_encode($initialData);

        $createResult = $this->withHeaders(['Content-Type' => 'application/json'])
            ->withBody($json)
            ->post('/api/tasks');

        $createdTask = json_decode($createResult->getJson());

        $updatedData = [
            'title' => 'Tarefa atualizada',
            'description' => 'Descrição atualizada',
            'status' => 'completed',
        ];

        $json = json_encode($updatedData);

        $updateResult = $this->withHeaders(['Content-Type' => 'application/json'])
            ->withBody($json)
            ->put('/api/tasks/update/' . $createdTask->id);

        $updateResult->assertStatus(200);
        $updatedTask = $updateResult->getJson();
        $dataDecoded = json_decode($updatedTask);
        
        $this->assertSame($updatedData['title'], $dataDecoded->data->title);
        $this->assertSame($updatedData['description'],$dataDecoded->data->description);
    }
}
