<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    private $_table = "nilai";
	
	public $id;
    public $banjar_id;
    public $juri_id;
    public $wujud;
    public $keutuhan;
    public $bahan;
    public $tinggi;
    public $unsur;
    public $ekspresi;
    public $keindahan;
    public $keserasian;
    public $inovasi;
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
    public function totalnilai()
    {
        return $this->db->count_all('nilai');   
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->banjar_id = $post["banjar_id"];
        $this->juri_id = $post["juri_id"];
        $this->wujud = $post["wujud"];
        $this->keutuhan = $post["keutuhan"];
        $this->bahan = $post["bahan"];
        $this->tinggi = $post["tinggi"];
        $this->unsur = $post["unsur"];
        $this->ekspresi = $post["ekspresi"];
        $this->keindahan = $post["keindahan"];
        $this->keserasian = $post["keserasian"];
        $this->inovasi = $post["inovasi"];
        $this->created_at = date("Y-m-d H:i:s");  
        $this->updated_at = date("Y-m-d H:i:s");  
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->banjar_id = $post["banjar_id"];
        $this->juri_id = $post["juri_id"];
        $this->wujud = $post["wujud"];
        $this->keutuhan = $post["keutuhan"];
        $this->bahan = $post["bahan"];
        $this->tinggi = $post["tinggi"];
        $this->unsur = $post["unsur"];
        $this->ekspresi = $post["ekspresi"];
        $this->keindahan = $post["keindahan"];
        $this->keserasian = $post["keserasian"];
        $this->inovasi = $post["inovasi"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date("Y-m-d H:i:s");  
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}