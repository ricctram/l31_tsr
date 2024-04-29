<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('evento_model');
    }

    public function index() {
        $data['eventi'] = $this->evento_model->get_eventi();
        $this->load->view('evento/index', $data);
    }

    public function create() {
        // Codice per la creazione di un nuovo evento (form di inserimento, validazione, ecc.)
    }

    public function edit($id) {
        // Codice per la modifica di un evento esistente
    }

    public function update($id) {
        // Codice per l'aggiornamento di un evento
    }

    public function delete($id) {
        // Codice per la cancellazione di un evento
    }
}
