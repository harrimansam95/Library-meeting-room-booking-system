<?php

class user extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function insert_user($data) {
// Inserting in Table(user) of Database(library_booking)
        $this->db->insert('user', $data);
    }

    function login($id, $password) {
        $display_block = "";
        $this->db->select("username, password");
        $this->db->where("username = $id AND password = $password");
        $query = $this->db->get('user');
        //If rows in user table exist
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $user) {
                $user_username = $user['username'];
                $user_password = $user['password'];
            }
            if ($id == $user_username && $password == $user_password) {
                $login = TRUE;
            }
        } else {
            $login = FALSE;
        }
        return $login;
    }

}
