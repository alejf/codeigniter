<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {

    public function index()
    {
        $this->load->view('head');
        $this->load->view('main');
        $this->load->view('footer');
    }
}
?>
