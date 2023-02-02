<?php
    class Products extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Products_model');
        }

        public function index(){
            $data['title'] = 'Aling Susan\'s Sisigan Menu';
            $data['products'] = $this->Products_model->get_products();
            $this->load->view('include/header', $data);
            $this->load->view('include/navbar'); 
            $this->load->view('products_view', $data); 
            $this->load->view('include/footer');
        }
    }
?>