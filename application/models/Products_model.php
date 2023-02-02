<?php
    class Products_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_products(){
            // SELECT * FROM tblproducts
            $query = $this->db->get('tblproducts');
            return $query->result_array();

            // $query = $this->db->get('tblproducts');
            // $result = $query->result_array();
            // //$this->dd($result);
            // return $result;

            //return $this->db->get('tblproducts')->result_array();
        }

        public function dd($data){ // Debug and die
            echo '<pre>';
            print_r($data);
            echo '</pre>';
            die();
        }
    }
?>