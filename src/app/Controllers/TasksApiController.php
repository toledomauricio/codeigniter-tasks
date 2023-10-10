<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\TasksService;
use CodeIgniter\API\ResponseTrait;

class TasksApiController extends BaseController
{
    use ResponseTrait;

    protected $tasksService;

    public function __construct()
    {
        $this->tasksService = new TasksService();
    }

    public function index()
    {
        $data = $this->tasksService->getAllTasks();
        return $this->respond($data, 200);
    }

    public function create()
    {
        $request = $this->request->getJSON();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? 'pending',
        ];

        $result = $this->tasksService->createTask($data);

        if ($result['success']) {
            return $this->respondCreated($result['data']);
        } else {
            return $this->respond(['message' => 'Erro ao criar o registro.', 'errors' => $result['errors']], 400);
        }
    }

    public function update($id)
    {
        $request = $this->request->getJSON();
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ];

        $result = $this->tasksService->updateTask($id, $data);
        return $this->respond($result);
    }

    public function delete($id)
    {
        $result = $this->tasksService->deleteTask($id);

        if ($result['success']) {
            return $this->respond(['message' => $result['message']], 204);
        } else {
            return $this->respond(['message' => $result['message']], 404);
        }
    }
}
