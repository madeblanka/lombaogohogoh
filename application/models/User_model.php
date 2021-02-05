<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";
	
	public $id;
    public $username;
    public $password;
    public $telp;

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
                $this->session->set_userdata(['role' => 'admin']);
                return true;
            }

        }
        
        // login gagal
		return false;
    }
    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function totaluser()
    {
        return $this->db->count_all('tb_user');   
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->telp = $post["telp"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->telp = $post["telp"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}