<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone']; // Aggiungi altri campi del cliente se necessario
    protected $useTimestamps = true; // Imposta su true se hai i campi created_at e updated_at nel database
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
