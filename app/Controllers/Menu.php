<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Controller;

class Menu extends BaseController
{

    public function __construct() {
        parent::__construct(); 

        // Carica il modello dell'evento
        $this->menuModel = new MenuModel();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
    }

    /**
     * Mostra la lista dei menu.
     */
    public function index()
    {
        $data['menus'] = $this->menuModel->findAll();
        $data['ionAuth'] = $this->ionAuth;

        return view('menu/index', $data);
    }

    /**
     * Mostra il form per creare un nuovo menu.
     */
    public function create()
    {
        $data['ionAuth'] = $this->ionAuth;
        
        $data['eventi'] = $this->menuModel->getEventi();
        $data['menu_items'] = $this->menuModel->getMenuItems();
        //$data['eventi'] = $this->menuModel->getEventiWithUsers(); //da controllare errore mysql 1051
        return view('menu/create', $data);
    }

    /**
     * Salva un nuovo menu nel database.
     */
    public function store()
    {

        // Recupera i dati del form
        $data = [
            //'event_id' => $this->request->getPost('event_id'),
            'menu_name' => $this->request->getPost('menu_name'),
            'description' => $this->request->getPost('description'),
            'price_per_person' => $this->request->getPost('price_per_person'),
        ];

        // Salva il nuovo menu
        $this->menuModel->createMenu($data);

        return redirect()->to('/menu')->with('success', 'Menu creato con successo.');

    }

    /**
     * Mostra il form per modificare un menu.
     */
    public function edit($id)
    {
        $data['ionAuth'] = $this->ionAuth;

        $data['menu'] = $this->menuModel->find($id);

        return view('menu/edit', $data);
        
    }

    /**
     * Aggiorna un menu nel database.
     */
    public function update($id)
    {

        // Recupera i dati del form
        $data = [
            'menu_name' => $this->request->getPost('menu_name'),
            'description' => $this->request->getPost('description'),
            'price_per_person' => $this->request->getPost('price_per_person'),
        ];

        // Aggiorna il menu
        $this->menuModel->update($id, $data);

        return redirect()->to('/menu')->with('success', 'Menu aggiornato con successo.');

    }

    /**
     * Elimina un menu dal database.
     */
    public function delete($id)
    {

        // Verifica se il menu esiste
        $menu = $this->menuModel->find($id);
        if (!$menu) {
            return redirect()->to('/menu')->with('error', 'Menu non trovato.');
        }

        // Elimina il menu
        $this->menuModel->delete($id);

        return redirect()->to('/menu')->with('success', 'Menu eliminato con successo.');

    }
    
    
    // ##################### Piatti menu #########################


    public function indexMenuItems() {
        
        $data['ionAuth'] = $this->ionAuth;
        
        $data['menu_items'] = $this->menuModel->getMenuItems();
        return view('menu/menu_item/index', $data);
    
    }
    
    public function createMenuItem() {
        
        $data['ionAuth'] = $this->ionAuth;
        
        return view('menu/menu_item/create', $data);
    
    }
    
    public function storeMenuItem() {
        // Recupera i dati del form
        $data = [
            'item_name' => $this->request->getPost('item_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        // Salva il nuovo menu
        $this->menuModel->createMenuItem($data);

        return redirect()->to('/menu_item')->with('success', 'Piatto creato con successo.');
    }
    
    public function editMenuItem($id) {

        $data['ionAuth'] = $this->ionAuth;
        
        $menuItem = $this->menuModel->getMenuItem($id);
        // Verifica se il menu item esiste
        if ($menuItem) {
            // Passa i dati del menu item alla vista
            $data['menu_item'] = $menuItem;

            // Carica la vista di modifica del menu item con i dati
            return view('menu/menu_item/edit', $data);
        } else {
            // Se il menu item non esiste, gestisci l'errore o reindirizza
            return redirect()->back()->with('error', 'Il menu item specificato non esiste.');
        }
    }
    
    public function updateMenuItem($id) {

        // Ricevi i nuovi dati del menu item dal form HTML
        $newMenuItemData = [
            'item_name' => $this->request->getPost('item_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        // Chiama il metodo updateMenuItem() nel modello per aggiornare il menu item
        $success = $this->menuModel->updateMenuItem($id, $newMenuItemData);

        // Gestisci la risposta dal modello
        if ($success) {
            // Il menu item è stato aggiornato con successo
            // Esegui altre azioni se necessario
            return redirect()->to('/menu_item')->with('success', 'Piatto aggiornato con successo.'); // Reindirizza alla pagina di visualizzazione dei menu
        } else {
            // Si è verificato un errore durante l'aggiornamento del menu item
            // Gestisci l'errore e reindirizza
            return redirect()->back()->with('error', 'Si è verificato un errore durante l\'aggiornamento del piatto.');
        }

    }

    public function deleteMenuItem($id)
    {
        // Chiama il metodo deleteMenuItem() nel modello per eliminare il menu item
        $success = $this->menuModel->deleteMenuItem($id);

        // Gestisci la risposta dal modello
        if ($success) {
            // Il menu item è stato eliminato con successo
            // Esegui altre azioni se necessario
            return redirect()->to('/menu_item'); // Reindirizza alla pagina di visualizzazione dei menu
        } else {
            // Si è verificato un errore durante l'eliminazione del menu item
            // Gestisci l'errore e reindirizza
            return redirect()->back()->with('error', 'Si è verificato un errore durante l\'eliminazione del piatto.');
        }
    }


}
