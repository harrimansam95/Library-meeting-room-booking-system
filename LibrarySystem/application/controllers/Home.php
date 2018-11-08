<?php

class Home extends CI_Controller {

    public function menuform() {
//Load the database (manually)
        // $this->load->database();
//Load the model class 
        $this->load->helper(array('form', 'url'));
        $this->load->view('my_menu');
    }

    public function LogIn() {
//Load the database (manually)
        // $this->load->database();
//Load the model class 
        $this->load->helper(array('form', 'url'));
        $this->load->view('login');
    }

    public function SignUp() {
//Load the database (manually)
        // $this->load->database();
//Load the model class 
        $this->load->helper(array('form', 'url'));
        $this->load->view('signup');
    }

    public function BookRoom() {
//Load the database (manually)
        // $this->load->database();
//Load the model class 
        $this->load->helper(array('form', 'url'));
        $this->load->view('bookroom');
    }
    public function BookRoom2() {
//Load the database (manually)
        // $this->load->database();
//Load the model class 
        $this->load->helper(array('form', 'url'));
        $this->load->view('bookroom2');
    }

  

}

?>