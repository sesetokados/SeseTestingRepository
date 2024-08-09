<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Libkoto extends CI_Controller {
 
   public function __construct() {
    parent::__construct(); 
    $this->load->model('Libkoto_model');
    $this->load->helper('url');
 
   }

  public function index()
  {
    $this->load->view('layout/header_homepage');       
    $this->load->view('libkoto/homepage_1');
    $this->load->view('layout/footer');
  }

  public function acquisition()
  {
    $this->load->view('layout/header_acquisition');       
    $this->load->view('libkoto/acquisition');
    $this->load->view('layout/footer');
  }

  public function login()
  {
    $this->load->view('layout/header_login');       
    $this->load->view('libkoto/login');
    $this->load->view('layout/footer');
  }


}