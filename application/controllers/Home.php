<?php

if (!defined('BASEPATH'))
    die();

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
            
    }

    public function index() {
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('template/footer');
    }


}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
