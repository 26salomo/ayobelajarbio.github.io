<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materi_model extends CI_Model {

	private $_table = "materi";
    public $id;
    public $judul_materi;
    public $isi_materi;
    public $link_youtube;
    public $gambar;
    public $created_at; 

    public function getAll()
    {
        return $this->db->order_by('id', 'DESC')->get($this->_table)->result();
        //method untuk mengembalikan array
        //"result()" untuk mengambil semua data hasil query
        
    }
    public function getlimit()
    {
        return $this->db->order_by('id', 'DESC')->limit(6)->get($this->_table)->result();
       
        
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
    
        $this->judul_materi = $post["judul_materi"];
        $this->isi_materi= $post["isi_materi"];
        $this->link_youtube = $post["link_youtube"];
        $this->gambar = $this->_uploadImage();
        
        return $this->db->insert($this->_table, $this);
    }

    public function update($id){
        $post = $this->input->post();

        $this->id = $id;
        $this->judul_materi = $post["judul_materi"];
        $this->isi_materi= $post["isi_materi"];
        $this->link_youtube = $post["link_youtube"];

        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        }

        return $this->db->update($this->_table, $this, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage(){
        $config['upload_path']          = './materi';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['file_name']            = 'Materi_'.date('ymdhis');
        $config['overwrite']			= true;
        $config['max_size']             = 5024; // 1MB
        $config['max_width']            = 5024;
        $config['max_height']           = 5024;

        $this->load->library('upload');
		$this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }


}