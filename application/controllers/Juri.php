<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class juri extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("Juri_model");
		$this->load->helper(array('url','download'));	
	}
	public function index()
    {
        $data["juri"] = $this->Juri_model->getAll();
        $this->load->view("juri/dashboard", $data);
    }

    public function add()
    {
        $juri = $this->Juri_model;
            $juri->save();
            redirect(site_url('juri/index'));
    }
    public function tambah()
    {
        $this->load->view('juri/tambah');
    }
    public function edit($id = null)
    {
        $juri = $this->Juri_model;
        $data["juri"] = $juri->getById($id);
        $this->load->view("juri/edit", $data);
	}
	public function update(){
		$this->Juri_model->update();
        redirect(site_url('juri/index'));
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Juri_model->delete($id)) {
            redirect(site_url('juri/index'));
        }
    }
}
