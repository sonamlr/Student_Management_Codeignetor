<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('home/auth-login');
	}
    public function do_login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/auth-login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Login_model');
            $user = $this->Login_model->check_login($username, $password);

            if ($user) {
               
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('username', $user->username);
                redirect('Home/');
            } else {
                $data['error'] = 'Invalid username or password';
                $this->load->view('home/auth-login', $data);
            }
        }
    }

    public function logout() {
        // Destroy user session
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        redirect('Login/');
    }
	
	
	
}
