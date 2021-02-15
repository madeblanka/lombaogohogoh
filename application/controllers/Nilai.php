<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("Banjar_model");
		// $this->load->model("Periode_model");
		$this->load->model("Nilai_model");
		$this->load->model("Juri_model");
		$this->load->model("User_model");
		$this->load->helper(array('url','download'));	
    }
	public function index()
    {
        $data["nilai"] = $this->Nilai_model->getAll();
        // $data['total'] = $data['nilai']
        // print_r('<pre>');
        // var_dump($data['nilai']);die;
        // print_r('</pre>');

        $this->load->view("nilai/dashboard", $data);
    }
	public function print()
    {
        $data["nilai"] = $this->Nilai_model->getAll();
        $this->load->view("nilai/print", $data);
    }
    public function add()
    {
        $nilai = $this->Nilai_model;
        $nilai->save();

        return redirect(site_url('banjar/'));
    }
    public function tambah($id = null)
    {
        if($id == null) {
            return redirect(site_url('/banjar'));
        }
        $data["banjar"] = $this->Nilai_model->getDetailPage($id);
        $this->load->view('nilai/tambah', $data);
    }
    public function edit($id = null)
    {
        $nilai = $this->Nilai_model;
        $data["nilai"] = $nilai->getById($id);
        $this->load->view("nilai/edit", $data);
	}
	public function update(){
		$this->Nilai_model->update();
        redirect(site_url('nilai/index'));
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Nilai_model->delete($id)) {
            redirect(site_url('nilai/index'));
        }
    }
}
