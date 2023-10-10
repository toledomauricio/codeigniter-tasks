<?php

namespace App\Services;

use App\Models\TaskModel;

class TasksService
{
    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function getAllTasks()
    {
        return $this->taskModel->findAll();
    }

    public function createTask($data)
    {
        $validationRules = [
            'title' => 'required|max_length[255]',
        ];

        if (!$this->taskModel->validate($validationRules)) {
            return ['success' => false, 'errors' => $this->taskModel->errors()];
        }

        $this->taskModel->insert($data);
        $insertedId = $this->taskModel->getInsertID();
        return ['success' => true, 'data' => $this->taskModel->find($insertedId)];
    }

    public function updateTask($id, $data)
    {
        $task = $this->taskModel->find($id);

        if (!$task) {
            return ['success' => false, 'message' => 'Registro não encontrado.'];
        }

        $validationRules = [
            'title' => 'required|max_length[255]',
        ];

        if (!$this->taskModel->validate($validationRules)) {
            return ['success' => false, 'errors' => $this->taskModel->errors()];
        }

        $this->taskModel->update($id, $data);
        return ['success' => true, 'data' => $this->taskModel->find($id)];
    }

    public function deleteTask($id)
    {
        $task = $this->taskModel->find($id);

        if (!$task) {
            return ['success' => false, 'message' => 'Registro não encontrado.'];
        }

        $this->taskModel->delete($id);
        return ['success' => true, 'message' => 'Registro excluído com sucesso.'];
    }
}