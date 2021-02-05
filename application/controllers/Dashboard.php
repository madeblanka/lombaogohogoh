<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("Banjar_model");
		// $this->load->model("Periode_mode");
		$this->load->model("Nilai_model");
		$this->load->model("Juri_model");
		$this->load->model("User_model");
		$this->load->helper(array('url','download'));	
    }
	public function index()
	{
		$data["banjar"] = $this->Banjar_model->getAll();
		$data["periode"] = $this->Periode_mode->getAll();
		$data["nilai"] = $this->Nilai_model->getAll();
		$data["juri"] = $this->Juri_model->getAll();
		$data["user"] = $this->User_model->getAll();
		$this->load->view('dashboard',$data);
	}
}
