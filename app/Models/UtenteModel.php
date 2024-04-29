<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utente_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_utenti() {
        return $this->db->get('utenti')->result_array();
    }

    public function get_utente_by_id($id) {
        return $this->db->get_where('utenti', array('id' => $id))->row_array();
    }

    public function insert_utente($data) {
        $this->db->insert('utenti', $data);
        return $this->db->insert_id();
    }

    public function update_utente($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('utenti', $data);
    }

    public function delete_utente($id) {
        $this->db->where('id', $id);
        $this->db->delete('utenti');
    }
}
