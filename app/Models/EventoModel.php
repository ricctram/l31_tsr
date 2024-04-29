<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_eventi() {
        return $this->db->get('eventi')->result_array();
    }

    public function get_evento_by_id($id) {
        return $this->db->get_where('eventi', array('id' => $id))->row_array();
    }

    public function insert_evento($data) {
        $this->db->insert('eventi', $data);
        return $this->db->insert_id();
    }

    public function update_evento($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('eventi', $data);
    }

    public function delete_evento($id) {
        $this->db->where('id', $id);
        $this->db->delete('eventi');
    }
}