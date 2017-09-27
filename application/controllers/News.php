<?php
class News extends CI_Controller {

    public function __construct()
    {
       /* if (! isset($_SESSION['userid'])) {
            header("HTTP/1.1 403 Unauthorized");
            exit;
        }*/
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('menuitem_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        //die('application/controllers/News.php -> function index()');
        $data['menuitems'] = $this->menuitem_model->get_all_menuitems();

        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
}