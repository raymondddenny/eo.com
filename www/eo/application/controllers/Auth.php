<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // LOGIN USER
    public function index()
    {
        $data['title'] = 'Login Page';
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login', $data);
        } {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Wrong password</div>
            ');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Email is not registered</div>');
            // redirect('auth');
        }
    }


    // METHOD REGISTER USER
    public function registrationUser()
    {
        $data['title'] = 'User Registration';

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        // CHECK IF INPUT DATA TRUE
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registrationUser', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                // TODO: buat tentukan role_id, pake table sendiri atau beda register page antara vendor dan user biasa ?
                'role_id' => 2,
                'date_created' => time(),
                'is_active' => 1,

            ];
            $this->db->insert('user', $data);
            $this->load->view('auth/registrationUser');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    // METHOD LOG OUT DIPAKE ADMIN, USER, VENDOR PAGES
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">You have been logged out</div>
            ');
        redirect('auth');
    }

    // METHOD BLOCKED
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
    
}
