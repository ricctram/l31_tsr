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

    // Metodo per associare un elemento del menu al menu specificato
    public function associateMenuItem($menuID, $itemID)
    {
        // Inserisci una nuova riga nella tabella di relazione menu_menu_items
        $this->db->table('menu_menu_items')->insert([
            'menu_id' => $menuID,
            'item_id' => $itemID
        ]);
    }

    
    
    
    /* public function updateMenu($id, $data)
    {
        return $this->update($id, $data);
    } */

    public function updateMenu($id, $data, $menuItemsData)
    {
        // Inizia una transazione
        $this->db->transBegin();

        try {
            // Aggiorna i campi del menu nella tabella 'menu'
            $this->db->table('menu')->where('menu_id', $id)->update($data);

            // Elimina tutti gli elementi del menu attualmente associati al menu ID dalla tabella di relazione 'menu_menu_items'
            $this->db->table('menu_menu_items')->where('menu_id', $id)->delete();

            // Inserisci i nuovi elementi del menu nella tabella di relazione 'menu_menu_items'
            foreach ($menuItemsData as $item_id) {
                $this->db->table('menu_menu_items')->insert([
                    'menu_id' => $id,
                    'item_id' => $item_id
                ]);
            }

            // Concludi la transazione
            $this->db->transCommit();

            return true; // Ritorna true se l'aggiornamento è stato eseguito con successo
        } catch (\Exception $e) {
            // Se si verifica un errore, annulla la transazione e gestisci l'errore
            $this->db->transRollback();

            return false; // Ritorna false se si verifica un errore durante l'aggiornamento
        }
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

    
    
    
    public function getMenuWithItems($id)
    {
        // Ottieni il menu dalla tabella 'menu' utilizzando l'ID fornito
        $menu = $this->db->table('menu')->where('menu_id', $id)->get()->getRowArray();

        // Verifica se il menu esiste
        if ($menu) {
            // Ottieni gli item del menu dalla tabella 'menu_items' attraverso la tabella di relazione 'menu_menu_items'
            return $this->db->table('menu_menu_items')
                            ->select('menu_items.*')
                            ->join('menu_items', 'menu_items.item_id = menu_menu_items.item_id')
                            ->where('menu_menu_items.menu_id', $id)
                            ->get()
                            ->getResultArray();
        } else {
            // Se il menu non esiste, restituisci null o gestisci l'errore
            return null;
        }
    }

    public function getSelectedMenuItems($id)
    {
        // Ottieni gli ID degli elementi del menu selezionati dalla tabella di relazione 'menu_menu_items'
        $selectedItems = $this->db->table('menu_menu_items')
                                ->select('item_id')
                                ->where('menu_id', $id)
                                ->get()
                                ->getResultArray();

        // Crea un array per memorizzare gli ID degli elementi selezionati
        $selectedItemIDs = [];

        // Estrai gli ID degli elementi selezionati
        foreach ($selectedItems as $item) {
            $selectedItemIDs[] = $item['item_id'];
        }

        // Restituisci gli ID degli elementi selezionati
        return $selectedItemIDs;
    }

    
    
    
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
