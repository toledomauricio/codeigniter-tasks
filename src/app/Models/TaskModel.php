<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'description', 'status'];

    protected $returnType = 'object';
    // protected $useTimestamps = true;

    // protected $dateFormat = 'datetime';

    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';

    protected $validationRules = [
        'title' => 'required|max_length[255]',
        'description' => 'permit_empty',
    ];

    protected $validationMessages = [
        'title' => [
            'required' => 'O campo título é obrigatório.',
            'max_length' => 'O campo título não pode ter mais de 255 caracteres.'
        ],
        'status' => [
            'required' => 'O campo status é obrigatório.',
        ]
    ];
}
