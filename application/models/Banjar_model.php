<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Banjar_model extends CI_Model
{
    private $_table = "banjar";
	
	public $id;
    public $periode_id;
    public $nama_stt;
    public $nama_ket_stt;
    public $nama_banjar;
    public $gambar;
    public $telp;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function totalbanjar()
    {
        return $this->db->count_all('banjar');   
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->periode_id = $post["periode_id"];
        $this->nama_stt = $post["nama_stt"];
        $this->nama_ket_stt = $post["nama_ket_stt"];
        $this->nama_banjar = $post["nama_banjar"];
        $this->gambar = $this->_uploadImage();
        $this->telp = $post["telp"];
        $this->created_at = date("Y-m-d H:i:s");  
        $this->updated_at = date("Y-m-d H:i:s");  
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->periode_id = $post["periode_id"];
        $this->nama_stt = $post["nama_stt"];
        $this->nama_ket_stt = $post["nama_ket_stt"];
        $this->nama_banjar = $post["nama_banjar"];
        if (!empty($_FILES["image"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->telp = $post["telp"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date("Y-m-d H:i:s");  
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }
    private function _uploadImage()
    {
    $config['upload_path']          = './gambar/';
    $config['allowed_types']        = 'jpeg|jpg|png';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    //print_r($this->upload->display_errors());
    return "default.jpg";
    }
private function _deleteImage($id)
{
    $banjar = $this->getById($id);
    if ($banjar->gambar != "default.jpg") {
	    $filename = explode(".", $banjar->gambar)[0];
		return array_map('unlink', glob(FCPATH."gambar/$filename.*"));
    }
}
}