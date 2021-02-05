<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Juri_model extends CI_Model
{
    private $_table = "juri";
	
	public $id;
    public $nama;
    public $username;
    public $password;
    public $alamat;
    public $status;
    public $telp;
    public $created_at;
    public $updated_at;

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = $post["password"] == $user->password;
            // jika password benar dan dia admin
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->session->set_userdata(['id' => $user->id]);
                $this->session->set_userdata(['nama' => $user->nama]);
                $this->session->set_userdata(['role' => 'juri']);
                return true;
            }

        }
        
        // login gagal
		return false;
    }

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
        return $this->db->count_all('juri');   
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->alamat = $post["alamat"];
        $this->status = $post["status"];
        $this->telp = $post["telp"];
        $this->created_at = date("Y-m-d H:i:s");  
        $this->updated_at = date("Y-m-d H:i:s");  
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->alamat = $post["alamat"];
        $this->status = $post["status"];
        $this->telp = $post["telp"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date("Y-m-d H:i:s");  
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}