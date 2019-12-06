<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {

        // Buat Tittle ke semua page
        $title['title'] = 'Login Page';

        // Template ke semua page Auth untuk Header
        $this->load->view('templates/auth_header', $title);
        // Konten login
        $this->load->view('auth/login');
        // Template kesemua page Auth untuk Fotter
        $this->load->view('templates/auth_footer');
    }

    public function logout() {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', 
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                You have been logged out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth');
    }
}