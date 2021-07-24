<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("materi_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
            if($this->user_model->isNotLogin()) redirect(site_url('login'));
        
    }

    public function index()
    {
        $data["products"] = $this->materi_model->getAll();
        $this->load->view("admin/adminpage", $data);
        // var_dump($data['products']);
    }

    public function create(){
        return $this->load->view("admin/new_form");
    }
    
    public function add(){

        $materi = $this->materi_model;
        $materi->save();

        $this->session->set_flashdata('success', 'Berhasil disimpan');
        return redirect(base_url('admin'));
    }

    public function update($id = null){
        $materi = $this->materi_model;

        $data["materi"] = $materi->getById($id);

        if (!$data["materi"]) show_404();
        
        return $this->load->view("admin/edit_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect(base_url('admin'));
       
        $materi = $this->materi_model;
        
        $materi->update($id);
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        return redirect(base_url('admin'));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->materi_model->delete($id)) {
            redirect(base_url('admin'));
        }
    }
}