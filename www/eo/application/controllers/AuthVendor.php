<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthVendor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // METHOD VENDOR LOGIN
    public function index()
    {
        $data['title'] = 'Login Vendor Page';
        // $data['user'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/vendorLogin', $data);
            $this->load->view('templates/auth_footer', $data);
        } {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $vendor = $this->db->get_where('vendor', ['email' => $email])->row_array();
        if ($vendor) {
            if (password_verify($password, $vendor['password'])) {
                $data = [
                    'email' => $vendor['email'],
                    'role_id' => $vendor['role_id']
                ];
                $this->session->set_userdata($data);
                if ($vendor['role_id'] == 3) {
                    redirect('vendors');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password</div>');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered</div>');
                redirect('authvendor');
            }
        }
    }


    // METHOD REGISTER VENDOR
    public function register()
    {
        $data['title'] = 'Vendor Account Registration';

        $this->form_validation->set_rules('fullname', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('phonenumber', 'PhoneNumber', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        // $this->form_validation->set_rules('type', 'Type', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        $data['vendor_type'] = ['Wedding', 'Birthday', 'Launching Event', 'Family Event'];
        // CHECK IF INPUT DATA TRUE
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registerVendor', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('fullname', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'phone_number' => htmlspecialchars($this->input->post('phonenumber', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'type' => htmlspecialchars($this->input->post('vendor_type', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'price' => "Rp.0",
                'vendor_details' => "Please write down you vendor details",
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('vendor', $data);
            $this->load->view('auth/vendorLogin');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('authvendor');
        }
    }
}
