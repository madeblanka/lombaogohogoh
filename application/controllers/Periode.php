<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		// $this->load->model("Periode_model");
		$this->load->helper(array('url','download'));	
	}
	public function index()
    {
        $data["periode"] = $this->Periode_model->getAll();
        $this->load->view("periode/dashboard", $data);
    }

    public function add()
    {
        $periode = $this->Periode_model;
            $periode->save();
            redirect(site_url('periode/index'));
    }
    public function tambah()
    {
        $this->load->view('periode/tambah');
    }
    public function edit($id = null)
    {
        $periode = $this->Periode_model;
        $data["periode"] = $periode->getById($id);
        $this->load->view("periode/edit", $data);
	}
	public function update(){
		$this->Periode_model->update();
        redirect(site_url('periode/index'));
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Periode_model->delete($id)) {
            redirect(site_url('periode/index'));
        }
    }
}
