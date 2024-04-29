<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('utente_model');
    }

    public function index() {
        $data['utenti'] = $this->utente_model->get_utenti();
        $this->load->view('utente/index', $data);
    }

    public function create() {
        // Codice per la creazione di un nuovo utente (form di inserimento, validazione, ecc.)
    }

    public function edit($id) {
        // Codice per la modifica di un utente esistente
    }

    public function update($id) {
        // Codice per l'aggiornamento di un utente
    }

    public function delete($id) {
        // Codice per la cancellazione di un utente
    }
}
