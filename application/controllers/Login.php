<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Juri_model');
    }
    private $_table = "tb_user";

    public $iduser;
    public $username;
    public $password;
    public $nama;
    public $jabatan;

    public function indexadmin()
    {
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->Juri_model->doLogin()) {
                echo "<script>
                            alert('Selamat Datang !');
                            window.location.href='../banjar';
                            </script>";
            } else {
                echo "<script>
                    alert('Username atau Password yang anda masukan Salah!');
                    </script>";
            }}
        // tampilkan halaman login
        $this->load->view("adminlogin");
    }

    public function index()
    {
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->User_model->doLogin()) {
                echo "<script>
                            alert('Selamat Datang !');
                            window.location.href='banjar';
                            </script>";
            } else {
                echo "<script>
                    alert('Username atau Password yang anda masukan Salah!');
                    window.location.href='login/index';
                    </script>";
            }}
        // tampilkan halaman login
        $this->load->view("login");
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // hancurkan semua sesi
        echo "<script>
        alert('Terimakasih !');
        window.location.href='index';
        </script>";

    }

}
