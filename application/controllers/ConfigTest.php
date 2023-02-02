<?php
    class ConfigTest extends CI_Controller{
        public function index(){
            echo $this->config->item('language').'<br />';
            $user = $this->config->item('admin_user');
            echo $user.'<br />';
            echo $this->config->item('admin_pass').'<br />';
            echo $this->config->item('admin_name').'<br />';
            $this->config->set_item('admin_name', 'New X. Amin');
            echo $this->config->item('admin_name').'<br />';
            echo '<br />';
            echo $this->config->site_url().'<br />';
            echo $this->config->base_url().'<br />';
            echo $this->config->system_url().'<br />';
        }

        public function anotherfx($fname, $lname){
            echo 'This is another function.<br />';
            echo 'Hello, '.$fname.' '.$lname.'. Welcome to my blog!!<br />';
        }

        public function showNumber($num){
            echo 'The number is: '.$num.'<br />';
        }
    }
?>