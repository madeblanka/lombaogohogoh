<?php defined('BASEPATH') or exit('No direct script access allowed');

class Periode_model extends CI_Model
{
    private $_table = "periode";

    public $id;
    public $user_id;
    public $juri_id;
    public $periode;
    public $tgl_pelaksanaan;
    public $tahun;
    public $keterangan;
    public $status;
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
        return $this->db->count_all('tb_banjar');
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->user_id = $post["user_id"];
        $this->juri_id = $post["juri_id"];
        $this->periode = $post["periode"];
        $this->tgl_pelaksanaan = $post["tgl_pelaksanaan"];
        $this->tahun = $post["tahun"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        $this->created_at = date("Y-m-d H:i:s");
        $this->updated_at = date("Y-m-d H:i:s");
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->user_id = $post["user_id"];
        $this->juri_id = $post["juri_id"];
        $this->periode = $post["periode"];
        $this->tgl_pelaksanaan = $post["tgl_pelaksanaan"];
        $this->tahun = $post["tahun"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date("Y-m-d H:i:s");
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
