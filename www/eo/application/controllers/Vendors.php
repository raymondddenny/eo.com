<!-- Vendor Controller -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendors extends CI_Controller
{

    public function __construct()
    {
        // untuk mencegah akses tanpa login atau session
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'EO Dashboard';
        //ambil data dari session
        $data['user'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        //redirect to homepage, set the controller view to..
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('vendor_view/index', $data);
        // footer.php doesn't need $data to passed
        $this->load->view('templates/footer');
    }
}
