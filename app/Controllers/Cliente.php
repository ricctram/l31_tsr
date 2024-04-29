<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Cliente extends Controller
{
    /**
     * Mostra la lista dei clienti.
     */
    public function index()
    {
        $clienteModel = new ClienteModel();
        $data['customers'] = $clienteModel->findAll();

        return view('cliente/index', $data);
    }

    /**
     * Mostra il form per creare un nuovo cliente.
     */
    public function create()
    {
        return view('cliente/create');
    }

    /**
     * Mostra il form per modificare un cliente esistente.
     */
    public function edit($id)
    {
        $clienteModel = new ClienteModel();
        $data['customer'] = $clienteModel->find($id);

        if (!$data['customer']) {
            // Mostra un messaggio di errore se il cliente non esiste
            return redirect()->to('/cliente')->with('error', 'Cliente non trovato.');
        }

        return view('cliente/edit', $data);
    }

    /**
     * Salva un nuovo cliente nel database.
     */
    public function store()
    {
        $clienteModel = new ClienteModel();

        // Recupera i dati del form
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
        ];

        // Salva il nuovo cliente
        $clienteModel->insert($data);

        return redirect()->to('/cliente')->with('success', 'Cliente creato con successo.');
    }

    /**
     * Aggiorna un cliente nel database.
     */
    public function update($id)
    {
        $clienteModel = new ClienteModel();

        // Recupera i dati del form
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
        ];

        // Aggiorna il cliente
        $clienteModel->update($id, $data);

        return redirect()->to('/cliente')->with('success', 'Cliente aggiornato con successo.');
    }

    /**
     * Elimina un cliente dal database.
     */
    public function delete($id)
    {
        $clienteModel = new ClienteModel();

        // Verifica se il cliente esiste
        $customer = $clienteModel->find($id);
        if (!$customer) {
            return redirect()->to('/cliente')->with('error', 'Cliente non trovato.');
        }

        // Elimina il cliente
        $clienteModel->delete($id);

        return redirect()->to('/cliente')->with('success', 'Cliente eliminato con successo.');
    }
}