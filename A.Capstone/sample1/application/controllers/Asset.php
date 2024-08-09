<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Asset extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Asset_model', 'asset');
 
   }
 
   /*
      Display all records in page
   */
  public function index()
  {
    $data['assets'] = $this->asset->get_all();
    $data['title'] = "CodeIgniter Asset Manager";
    $this->load->view('layout/header');       
    $this->load->view('asset/index',$data);
    $this->load->view('layout/footer');
  }
 
  /*
 
    Display a record
  */
  public function show($id)
  {
    $data['asset'] = $this->asset->get($id);
    $data['title'] = "Show Asset";
    $this->load->view('layout/header');
    $this->load->view('asset/show', $data);
    $this->load->view('layout/footer'); 
  }
 
  /*
    Create a record page
  */
  public function create()
  {
    $data['title'] = "Create Asset";
    $this->load->view('layout/header');
    $this->load->view('asset/create',$data);
    $this->load->view('layout/footer');     
  }
 
  /*
    Save the submitted record
  */
  public function store()
  {
    $this->form_validation->set_rules('asset_no', 'Asset_no', 'required');
    $this->form_validation->set_rules('asset_name', 'Asset_name', 'required');
	$this->form_validation->set_rules('asset_type', 'Asset_type', 'required');
	$this->form_validation->set_rules('asset_weight', 'Asset_weight', 'required');
	$this->form_validation->set_rules('asset_desc', 'Asset_desc', 'required');
	$this->form_validation->set_rules('asset_acquired', 'Asset_acquired', 'required');
	$this->form_validation->set_rules('active', 'Active', 'required');
	
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('asset/create'));
    }
    else
    {
       $this->asset->store();
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('asset'));
    }
 
  }
 
  /*
    Delete a record
  */
  public function delete($id)
  {
    $item = $this->asset->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('asset'));
  }
 
 
}