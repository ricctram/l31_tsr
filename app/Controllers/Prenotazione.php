<?php

namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class Booking extends Controller
{
    /**
     * Mostra la lista delle prenotazioni.
     */
    public function index()
    {
        $bookingModel = new BookingModel();
        $data['bookings'] = $bookingModel->findAll();

        return view('booking/index', $data);
    }

    /**
     * Mostra il form per creare una nuova prenotazione.
     */
    public function create()
    {
        return view('booking/create');
    }

    /**
     * Salva una nuova prenotazione nel database.
     */
    public function store()
    {
        $bookingModel = new BookingModel();

        // Recupera i dati del form
        $data = [
            'client_id' => $this->request->getPost('client_id'),
            'event_date' => $this->request->getPost('event_date'),
            // Aggiungi altri campi della prenotazione
        ];

        // Salva la nuova prenotazione
        $bookingModel->insert($data);

        return redirect()->to('/booking');
    }

    // Aggiungi altre funzioni del controller per la visualizzazione, l'aggiornamento e l'eliminazione di prenotazioni
}
