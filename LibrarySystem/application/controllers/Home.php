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

    public function AddEntry() {
//Load the database (manually)
        // $this->load->database();
//Load the model class 
        $this->load->helper(array('form', 'url'));
        $this->load->model("user");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'knumber',
                'label' => 'K-Number',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
            array(
                'field' => 'password_confirm',
                'label' => 'Password Confirm',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) { /* Loads the UserLogin view */
            $this->load->view('signup');
        } else {
            $date = date("Y-m-d");
            $data = array(
                'knumber' => $this->input->post('knumber'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone_no' => $this->input->post('phone_no'),
                'password' => $this->input->post('password'),
                'userImg' => $this->input->post('userImg'),
                'date_added' => $date,
                'date_modified' => $date
            );
            //Transfering data to Model
            $this->session->set_userdata('userData', $data);
            $user = $this->user->insert_user($data);
            $this->load->view('my_menu');
        }
    }

    public function login() {

        $this->load->view('login');
        $username = $this->input->post('knumber');
        $password = $this->input->post('password');

        $query = $this->user->login($username, $password);

        if ($query == TRUE) {
            $this->load->view('success');
        } else {
            echo 'Error logging in: Make sure the Knumber or password is correct and try again';
            $this->load->view('login');
        }
    }

}

?>