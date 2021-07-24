<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("materi_model");
        $this->load->library('form_validation');
    }

	public function index(){
        $data['materi']  =  $this->materi_model->getAll();
		$this->load->view('daftarmateri', $data);
	}

    public function detail($id){
        $data['materi']  =  $this->materi_model->getById($id);
		$this->load->view('detail_materi', $data);
    }


}