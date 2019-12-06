<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        
        $data['title'] = 'Beranda';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tertanggung() {
        
        $data['title'] = 'Tertanggung';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tertanggung', $data);
        $this->load->view('templates/footer', $data);
    }

}
?>