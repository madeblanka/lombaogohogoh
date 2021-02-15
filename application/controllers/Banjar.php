<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banjar extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("Banjar_model");
		$this->load->helper(array('url','download'));	
	}
	public function index()
    {
        $data["banjar"] = $this->Banjar_model->getAll();
        $data['valid'] = $this->Banjar_model->isValid();

        $this->load->view("banjar/dashboard", $data);
    }

    public function add()
    {
        $banjar = $this->Banjar_model;
            $banjar->save();
            redirect(site_url('banjar/index'));
    }
    public function tambah()
    {
        $this->load->view('banjar/tambah');
    }
    public function edit($id = null)
    {
        $banjar = $this->Banjar_model;
        $data["banjar"] = $banjar->getById($id);
        $this->load->view("banjar/edit", $data);
	}
	public function update(){
		$this->Banjar_model->update();
        redirect(site_url('banjar/index'));
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Banjar_model->delete($id)) {
            redirect(site_url('banjar/index'));
        }
    }
}
