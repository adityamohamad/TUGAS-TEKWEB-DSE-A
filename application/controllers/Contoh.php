<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->model('mhs');
        $data['siswa'] = $this->mhs->get_data();
        $this->load->view('Halaman.php', $data);
    }

    public function porto1()
    {
        $this->load->view('porto1.php');
    }

    public function porto2()
    {
        $this->load->view('porto2.php');
    }

    public function porto3()
    {
        $this->load->view('porto3.php');
    }
}
