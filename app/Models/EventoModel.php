<?php

namespace App\Models;

use CodeIgniter\Model;

class EventoModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'event_id';
    protected $allowedFields = ['user_id', 'event_date', 'event_type', 'guest_count', 'notes', 'created_at', 'updated_at'];

    public function getEventi()
    {
        return $this->findAll();
    }

    public function getEvento($id)
    {
        return $this->find($id);
    }

    public function createEvento($data)
    {
        return $this->insert($data);
    }

    public function updateEvento($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteEvento($id)
    {
        return $this->delete($id);
    }

    public function getEventiWithUsers()
    {
        return $this->select('events.*, users.first_name, users.last_name, users.email, users.phone')
                    ->join('users', 'users.id = events.user_id')
                    ->findAll();
    }

    public function getEventoWithUser($id)
    {
        return $this->select('events.*, users.first_name, users.last_name, users.email')
                    ->join('users', 'users.id = events.user_id')
                    ->where('events.event_id', $id)
                    ->first();
    }

    public function getUsers()
    {
        return $this->db->table('users')->get()->getResultArray();
    }
}
