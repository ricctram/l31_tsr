<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'menu_id';
    protected $allowedFields = ['event_id', 'menu_name', 'description', 'price_per_person'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getMenus()
    {
        return $this->findAll();
    }

    public function getMenu($id)
    {
        return $this->find($id);
    }

    public function createMenu($data)
    {
        return $this->insert($data);
    }

    public function updateMenu($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteMenu($id)
    {
        return $this->delete($id);
    }

    public function getEventi()
    {
        return $this->db->table('events')->get()->getResultArray();
    }

    public function getEventiWithUsers()
    {
        return $this->select('events.*, users.first_name, users.last_name')
                    ->join('users', 'users.id = events.user_id')
                    ->findAll();
    }
    
    
    
    // ######################### Piatti menu ###########################

    public function getMenuItems()
    {
        return $this->db->table('menu_items')->get()->getResultArray();
    }

    public function getMenuItem($id)
    {
        return $this->db->table('menu_items')->where('item_id', $id)->get()->getRowArray();
    }

    public function getMenuItemsOfMenu()
    {
        return $this->select('menu_items.*, menu.menu_id')
                    ->join('menu', 'menu_items.item_id = menu.menu_id')
                    ->findAll();
    }

    public function createMenuItem($data)
    {
        return $this->db->table('menu_items')->insert($data);
    }

    public function updateMenuItem($id, $data)
    {
        // Imposta i nuovi dati del menu item
        return $this->db->table('menu_items')
                    ->where('item_id', $id)
                    ->update($data);
    }

    public function deleteMenuItem($id)
    {
        // Elimina il menu item dalla tabella 'menu_items' utilizzando l'ID
        return $this->db->table('menu_items')->where('item_id', $id)->delete();
    }
}
