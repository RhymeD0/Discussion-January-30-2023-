<?php
    class Home extends CI_Controller{
        // This is the constructor function
        public function __construct(){
            // Call the constructo function of
            //     the parent class (CI_Controller)
            parent::__construct();
            
            // This will load the url helper
            //    url helper isneed so that the view files
            //    can use the base_url function.
            $this->load->helper('url');
        }

        // This function will run immdiately when the
        //    Home controller is loaded
        public function index(){
            // Set the tab title of the page
            $data['title'] = 'Aling Susan\'s Sisigan';
            // Load the header view file and pass the data array
            $this->load->view('include/header', $data);
            // Load the the navbar view file
            $this->load->view('include/navbar');
            // Load the main content of the webpage
            $this->load->view('home_view');
            //Load the footer view file
            $this->load->view('include/footer'); 
        }
    }
?>