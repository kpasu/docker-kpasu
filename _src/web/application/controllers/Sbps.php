<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sbps extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('sbps/index');
        $this->load->view('templates/footer');
    }
}
