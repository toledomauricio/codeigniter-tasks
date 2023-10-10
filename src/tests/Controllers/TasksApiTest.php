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
}
