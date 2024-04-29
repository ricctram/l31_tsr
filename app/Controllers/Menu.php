<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Controller;

class Menu extends Controller
{
    /**
     * Mostra la lista dei menu.
     */
    public function index()
    {
        $menuModel = new MenuModel();
        $data['menus'] = $menuModel->findAll();

        return view('menu/index', $data);
    }

    /**
     * Mostra il form per creare un nuovo menu.
     */
    public function create()
    {
        return view('menu/create');
    }

    /**
     * Salva un nuovo menu nel database.
     */
    public function store()
    {
        $menuModel = new MenuModel();

        // Recupera i dati del form
        $data = [
            'name' => $this->request->getPost('name'),
            // Aggiungi altri campi del menu
        ];

        // Salva il nuovo menu
        $menuModel->insert($data);

        return redirect()->to('/menu');
    }

    /**
     * Mostra i dettagli di un menu.
     */
    public function show($id)
    {
        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->find($id);

        return view('menu/show', $data);
    }

    /**
     * Mostra il form per modificare un menu.
     */
    public function edit($id)
    {
        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->find($id);

        return view('menu/edit', $data);
    }

    /**
     * Aggiorna un menu nel database.
     */
    public function update($id)
    {
        $menuModel = new MenuModel();

        // Recupera i dati del form
        $data = [
            'name' => $this->request->getPost('name'),
            // Aggiungi altri campi del menu
        ];

        // Aggiorna il menu
        $menuModel->update($id, $data);

        return redirect()->to('/menu');
    }

    /**
     * Elimina un menu dal database.
     */
    public function delete($id)
    {
        $menuModel = new MenuModel();
        $menuModel->delete($id);

        return redirect()->to('/menu');
    }
}
