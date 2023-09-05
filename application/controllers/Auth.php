<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends CI_Controller{
        public function index(){
            $this->login_registration();
            
        }

        public function login_registration(){
            $data['title'] = 'Login & registration | CAS';
            $this->load->view('enduser/user-login-&-registration/user-login-&-registration',$data);
           
        }
        
        // public function aboutus(){
        //     $data['title'] = 'About us';
        //     $this->load->view('mainpage/home',$data);
             
        // }
    }

    /*
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        class App1 extends CI_Controller{
            public function index(){
                $this->home();
            }
            public function home(){
                $this->load->view('home');
            }
        }
    ?>
    
    */


?>