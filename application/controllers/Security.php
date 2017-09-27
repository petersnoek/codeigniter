<?php
class Security extends CI_Controller {

    public function __construct()
    {
        /* if (! isset($_SESSION['userid'])) {
             header("HTTP/1.1 403 Unauthorized");
             exit;
         }*/
        parent::__construct();
        $this->load->model('security_model');
        $this->load->model('user_model');

        //Start session
        $this->load->library('session');

        //Try retriving data:
        $session_id = $this->session->userdata('session_id');
        echo $session_id;
    }

    public function index()
    {
        $data['news'] = array();

        if (isset($_POST['search'])) {
            $searchtext = $_POST['search'];
            $data['news'] = $this->security_model->get_news($searchtext);
        } else {
            $data['news'] = $this->security_model->get_news();
        }

        //var_dump($data);
        //exit();

        $this->load->view('templates/header');
        $this->load->view('security/form', $data);
        $this->load->view('templates/footer');
    }

    public function loginform() {

        if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->user_model->check_user($username, $password);
        }
        $data = array();

        $this->load->view('templates/header');
        $this->load->view('security/loginform', $data);
        $this->load->view('templates/footer');
    }

}