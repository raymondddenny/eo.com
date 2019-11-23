<!-- Menu Management Controller -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Menu Management';
        //ambil data dari session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // GET USER_MENU TABLE
        $data['menu'] = $this->db->get('user_menu')->result_array();
        //redirect to homepage, set the controller view to..
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/index', $data);
        // footer.php doesn't need $data to passed
        $this->load->view('templates/footer');
    }
}
