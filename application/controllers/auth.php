<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller 
{
    public function index ()
    {
       $this->load->view('auth/login') ;
    }
 }