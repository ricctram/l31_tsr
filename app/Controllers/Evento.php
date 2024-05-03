<?php

namespace App\Controllers;

use App\Models\EventoModel;
use CodeIgniter\Controller;

class Evento extends BaseController
{
    public function __construct()
    {
        // Chiama il costruttore del genitore
        parent::__construct();

        // Carica il modello dell'evento
        $this->eventoModel = new EventoModel();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
    }

    public function index()
    {
        $data['ionAuth'] = $this->ionAuth;
        
        // Ottieni gli eventi dal modello
        $data['eventi'] = $this->eventoModel->getEventiWithUsers();

        // Carica la vista con i dati
        return view('evento/index', $data);
    }

    public function create()
    {
        $data['ionAuth'] = $this->ionAuth;
        
        $data['utenti'] = $this->eventoModel->getUsers();
        return view('evento/create', $data);
    }

    public function store()
    {
        // Recupera i dati del form
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'event_type' => $this->request->getPost('event_type'),
            'event_date' => $this->request->getPost('event_date'),
            'guest_count' => $this->request->getPost('guest_count'),
            'notes' => $this->request->getPost('notes'),
        ];

        // Salva il nuovo cliente
        $this->eventoModel->insert($data);

        return redirect()->to('/evento')->with('success', 'Evento creato con successo.');
    }

    /**
     * Mostra i dettagli di un evento.
     */
    public function show($id) {
        $data['ionAuth'] = $this->ionAuth;

        $data['evento'] = $this->eventoModel->getEvento($id);

        return view('evento/show', $data);
    }

    public function edit($id)
    {
        $data['ionAuth'] = $this->ionAuth;
        
        $data['utenti'] = $this->eventoModel->getUsers();
        $data['evento'] = $this->eventoModel->getEvento($id);
        return view('evento/edit', $data);
    }

    public function update($id)
    {
        // Recupera i dati del form
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'event_type' => $this->request->getPost('event_type'),
            'event_date' => $this->request->getPost('event_date'),
            'guest_count' => $this->request->getPost('guest_count'),
            'notes' => $this->request->getPost('notes'),
        ];

        // Aggiorna il cliente
        $this->eventoModel->update($id, $data);

        return redirect()->to('/evento')->with('success', 'Evento aggiornato con successo.');
    }

    public function delete($id)
    {
        // Verifica se il cliente esiste
        $evento = $this->eventoModel->find($id);
        if (!$evento) {
            return redirect()->to('/evento')->with('error', 'Evento non trovato.');
        }

        // Elimina il cliente
        $this->eventoModel->delete($id);

        return redirect()->to('/evento')->with('success', 'Evento eliminato con successo.');
    }
}
